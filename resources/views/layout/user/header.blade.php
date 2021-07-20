<nav class="navbar navbar-expand-md header-background navbar-dark ">
        

    

      <div class=" navbar-collapse justify-content-end inner-header" id="collapsibleNavbar">
      <ul class="navbar-nav" style="float: center;">
            @guest
        
          <a class="nav-link btn btn-info" href="{{ route('login') }}" ><b>Đăng nhập</b></a>
        
         @if (Route::has('register'))
         <br>
          <a class="nav-link btn btn-info" href="{{ route('register') }}"><b>Đăng ký</b></a>

        
        @endif

        
        @else 
         <li class="nav-item dropdown">
            
          <a class="nav-link btn btn-info" role="button" href="#" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="fas fa-user"></i> <b>{{ Auth::user()->name }}</b></a>
               <div class="Home">

               @if ((Auth::check() && Auth::user()->typeuser == 'admin'))
                                <a href="{{ route('admin.index') }}">
                                
                                Trang quản trị
                                <i class="fas fa-tasks-alt"></i>
                                </a>
                            @endif
                            @if ((Auth::check() && Auth::user()->typeuser == 'admin')||(Auth::check() && Auth::user()->typeuser == 'user'))

                            <a href="{{ route('info.index') }}">                               
                            @endif
                               <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                             
                            Đăng xuất
                            <i class="fas fa-sign-out-alt"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            
                           </div>
        </li> 
          @endguest 
      </ul>
    </div>  
    <br>
    


  </nav>