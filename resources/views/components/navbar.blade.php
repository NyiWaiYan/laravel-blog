
 <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">

        <span style="color:red">N</span>
        <span style="color:yellowgreen"> W</span>
        <span style="color:yellowgreen"> Y</span>
        </a>
        <div class="d-flex">
         
          <a href="/#blogs" class="nav-link">Blogs</a>

          @if(!auth()->check())
          <a href="/register" class="nav-link">Register</a>
          @else
          <a href="" class="nav-link"> welcome {{(auth()->user()->name)}}</a>
          @endif


          @if(auth()->check())

          <form action="/logout" method="POST">
            @csrf
          <button type="submit" href="" class="nav-link btn btn-link">Log Out</button>
          </form>
          @endif
         
          <a href="#subscribe" class="nav-link">Subscribe</a>
         
        </div>
      </div>
    </nav>