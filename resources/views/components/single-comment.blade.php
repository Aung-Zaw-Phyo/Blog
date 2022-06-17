@props(['comment'])

<x-card-wrapper>  
        <div class="d-flex">
          <div>
            <img class="rounded-circle" width="50" height="50" src="{{$comment->author->avatar}}" alt="">
          </div> 
          <div class="ms-3">
            <h6>{{$comment->author->name}}</h6>  
            <p class="text-secondary">{{$comment->created_at->format("F j, Y, g:i a")}}</p>
          </div>           
        </div>
        <div class="mt-1">
          {{$comment->body}}
        </div>
</x-card-wrapper>