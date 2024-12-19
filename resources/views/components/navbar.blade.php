<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">BLOG PROJECT</a>
      <div class="d-flex">
        <a href="/#blogs" class="nav-link">Blogs</a>


@auth
@if (auth()->user() && auth()->user()->is_admin)
<a href="/admin/blogs" class="nav-link" >Dashboard</a>

@endif
<img src="{{auth()->user()->avatar}}"
 alt=""
 width="50"
 height="50"
 class="rounded-circle">
<a href="" class="nav-link" >Welcome {{auth()->user()->name}}</a>
  <form action="/logout" method="POST">
    @csrf
<button type="submit"
       href=""
       class="nav-link btn btn-link"
> Logout</button>
 </form>
 @else
 <a href="/register" class="nav-link">Register</a>
 <a href="/login" class="nav-link">Login</a>

  @endauth

      <a href="#subscribe" class="nav-link">Subscribe</a>
      </div>
    </div>
  </nav>
