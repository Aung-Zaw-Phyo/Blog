<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-2 mt-5">
                <ul class="list-group mt-4">
                    <li class="list-group-item"><a href="/admin/blogs">Admin blogs</a></li>
                    <li class="list-group-item"><a href="/admin/blogs/create">Admin create</a></li> 
                </ul>
            </div>
            <div class="col-md-10">{{$slot}}</div>
        </div>
    </div>
</x-layout>