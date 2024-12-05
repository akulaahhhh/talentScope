<div>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
    
          <a href="/" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('talentScope-img') }}/talentScope-mentol.svg" alt="">
            <h1 class="sitename">talentScope</h1>
          </a>
    
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="/#hero" class="active">Home</a></li>
              <li><a href="index.html#about">Programs</a></li>
              <li><a href="index.html#features">FAQ</a></li>
              <li><a href="index.html#services">About</a></li>
              {{-- <li><a href="index.html#pricing">Pricing</a></li> --}}

              {{-- ada dropdown --}}
              {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Dropdown 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="#">Deep Dropdown 1</a></li>
                      <li><a href="#">Deep Dropdown 2</a></li>
                      <li><a href="#">Deep Dropdown 3</a></li>
                      <li><a href="#">Deep Dropdown 4</a></li>
                      <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Dropdown 2</a></li>
                  <li><a href="#">Dropdown 3</a></li>
                  <li><a href="#">Dropdown 4</a></li>
                </ul>
              </li> --}}
              @if($is_logged_in === true)
              <li><a href="{{route('talentScope.logout')}}">Logout</a></li>
              <a class="btn-getstarted" href="index.html#about">Hi {{$user->username}}</a>

              @else
              <li><a href="{{route('talentScope.register_candi')}}">Register</a></li>
              <li><a href="{{route('talentScope.login')}}">Login</a></li>
              <a class="btn-getstarted" href="{{route('talentScope.register_org')}}">Post your Event!</a>
              @endif

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
          {{-- @if($is_logged_in === true)
          <a class="btn-getstarted" href="index.html#about">Profile</a>
              
          @else
              nyenyey
          @endif --}}
        </div>
      </header>
</div>