<style>

   a{
    color: black;
   
  }
</style>

 <nav class="navbar " id="navbar1">
      <div class="container">
        <a class="navbar-brand" href="/">

        <span style="color:red">N</span>
        <span style="color:yellowgreen"> W</span>
        <span style="color:yellowgreen"> Y</span>
        </a>
        <div class="d-flex">
         
        
 
        <a href="/#blogs" class="nav-link"style="color:yellowgreen">Blogs</a>
         
         <a href="#subscribe" class="nav-link" style="color:yellowgreen">Subscribe</a>
         @auth

         @can('admin')
            <a
                
                href="/admin/blogs"
                class="nav-link"
                style="color:yellowgreen"
            >Dashboard</a>
            @endcan
         <img src="{{auth()->user()->avatar}}" alt="" width="35px" height="35px" class="rounded-circle">
         <a href="" class="nav-link" style="color:yellowgreen"> {{(auth()->user()->name)}}</a>
         

         <form action="/logout" method="POST">
            @csrf
          <button type="submit" href="" class="nav-link btn btn-link"style="color:red">Log Out</button>
          </form>
        
          @else
          <a href="/register" class="nav-link">Register</a>
          
          
          <a
                href="/login"
                class="nav-link"
            >Login</a>
            
          @endguest


          

         
         
        </div>
      </div>
    </nav>