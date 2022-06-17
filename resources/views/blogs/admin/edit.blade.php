

<x-admin-layout>

    <h2 class="text-center my-3">Admin Form</h2>
    
        <x-card-wrapper>
            <form action="/admin/blogs/{{$blog->slug}}/update" method="POST" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <x-form.input name='title' value="{{$blog->title}}"/>
                <x-form.input name='slug' value="{{$blog->slug}}"/>
                <x-form.input name='intro' value="{{$blog->intro}}"/>
                <x-form.textarea name="body"  value="{{$blog->body}}"/>
                <x-form.input name="thumbnail" type="file"/>
                <img src="/storage/{{$blog->thumbnail}}" width="250" height="150" alt="">
                <x-form.input-wrapper>
                    <x-form.label name="category"/>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option {{ $category->id == old('category_id', $blog->category->id) ? "selected" : "" }} value="{{$category->id}}">{{$category->name}}</option>    
                        @endforeach
                    </select>
                    <x-error name='category_id'/>
                </x-form.input-wrapper>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </x-card-wrapper>
    

</x-admin-layout>