<!-- navbar -->
<nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Creative Coder</a>
        <div class="d-flex">
          <a href="#blogs" class="nav-link">Blogs</a>
          @guest
          <a href="/register" class="nav-link">Register</a>
          <a href="/login" class="nav-link">Login</a>
          @else

          @can('admin')
          <a href="/admin/blogs" class="nav-link">Dashboard</a>
          @endcan

          <img src="{{auth()->user()->avatar}}" class="rounded-circle" width="50" height="50" alt="">
          <a href="" class="nav-link">Welcome {{auth()->user()->name}}</a>

          <form action="/logout" method="POST">
            @csrf
            <button type="submit" href="" class="btn btn-link nav-link">Logout</button>
          </form>

          @endguest

          <a href="#subscribe" class="nav-link">Subscribe</a>
        </div>
      </div>
    </nav>