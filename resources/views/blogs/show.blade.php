
<x-layout>
    <!-- singloe blog section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
            src="/storage/{{$blog->thumbnail}}"
            class="card-img-top"
            alt="..."
          />
          <h3 class="my-3">{{$blog->title}}</h3>
          <div>
              <div class="">Author - <a href="/?username={{$blog->author->username}}">{{$blog->author->name}}</a></div>
              <div><a href="/?category={{$blog->category->slug}}"><span class="badge bg-primary my-1">{{$blog->category->name}}</span></a></div>
              <div class="text-secondary my-1">{{$blog->created_at->diffForHumans()}}</div>

              
              <form action="/Blogs/{{$blog->slug}}/subscription" method="POST">
                @csrf
                @auth
                @if (auth()->user()->isSubscribed($blog))
                  <div class="text-secondary mt-1"><button class="btn btn-danger">Unsubscribe</button></div>   
                @else   
                  <div class="text-secondary mt-1"><button class="btn btn-warning">Subscribe</button></div>
                @endif
                @endauth
              </form>
              

          </div>
          <p class="lh-md mt-4">
            {!!$blog->body!!}
          </p>
        </div>
      </div>
    </div>

    <section class="container">
      <div class="col-md-8 mx-auto">
        @auth
        <x-comment-form :blog='$blog'/>
        @else
        <p class="text-center">Please <a href="/login">login</a> to participate in this discussion!</p>
        @endauth
      </div>
    </section>

    @if ($blog->comments->count())
    <x-comments :comments="$blog->comments()->latest()->paginate(3)"/>
    @endif

    <x-blogs-you-may-like-section :randomBlogs='$randomBlogs'/>
    
</x-layout>

