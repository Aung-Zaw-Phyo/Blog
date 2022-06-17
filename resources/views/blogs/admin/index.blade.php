

<x-admin-layout>
    <div class=" my-3">
        <h3 class="text-center">Blogs</h3>
        <x-card-wrapper>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($blogs as $blog)
                    <tr>
                        <td> <a href="/Blogs/{{$blog->slug}}" target="_blank">{{$blog->title}}</a> </td>
                        <td> {{$blog->slug}} </td>
                        <td>
                            <a href="/admin/blogs/{{$blog->slug}}/edit" class="btn btn-warning"> Edit </a>
                        </td>
                        <td>
                            <form action="/admin/blogs/{{$blog->slug}}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </x-card-wrapper>
        {{$blogs->links()}}
    </div>
</x-admin-layout>