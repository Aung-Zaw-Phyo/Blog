@props(['blog'])

<x-card-wrapper>
    <form action="/Blogs/{{$blog->slug}}/comments" method="POST">
      @csrf
      <textarea class="form-control border border-0" name="body" required id="" cols="10" rows="5" placeholder="Say Something ..."></textarea>
      <x-error name='body'/>
      <div class="d-flex justify-content-end mt-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</x-card-wrapper>