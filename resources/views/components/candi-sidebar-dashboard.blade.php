@php
    $org_nav = [
      ['Dashboard','fas fa-home',route('talentScope.organizer_dashboard.organizer_dashboard')],
      ['Profile Setting','fas fa-pen-square',route('talentScope.organizer_dashboard.view_profile_setting')],
      ['Upload Event', 'fas fa-file-upload', route('talentScope.organizer_dashboard.view_upload_event')],
];

    $candi_nav = [
      ['Dashboard','fas fa-home',route('talentScope.candidate_dashboard.candidate_dashboard')],
      ['Profile Setting','fas fa-pen-square',route('talentScope.candidate_dashboard.view_profile_setting')],
];
@endphp

<!-- Sidebar -->
<div class="sidebar" data-background-color="light">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="light">
            <a href="/" class="logo ">
                {{-- <img src="{{ asset('talentScope-img') }}/talentScope-mentol.svg" alt=""> --}}
                <img src="{{ asset('talentScope-img') }}/talentScope-mentol.svg" alt="navbar brand"
                    class="navbar-brand m-1 mt-0 mb-2" height="20" />
                <h3 class="sitename">talentScope</h3>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar" style="color: #1a2035 !important">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left" style="color: #1a2035"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt" style="color: #1a2035"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item ">
                    <a  href="{{route('talentScope.organizer_dashboard.organizer_dashboard')}}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>

                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>

                <li class="nav-item">
                    <a href="{{route('talentScope.candidate_dashboard.view_profile_setting')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>Profile Setting</p>
                    </a>
                </li>



                {{-- SIDEBAR ADA BADGES --}}
                {{-- <li class="nav-item">
            <a href="widgets.html">
              <i class="fas fa-desktop"></i>
              <p>Widgets</p>
              <span class="badge badge-success">4</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../documentation/index.html">
              <i class="fas fa-file"></i>
              <p>Documentation</p>
              <span class="badge badge-secondary">1</span>
            </a>
          </li> --}}


                {{-- SIDEBAR WITH ANAK --}}
                {{-- <li class="nav-item">
            <a data-bs-toggle="collapse" href="#base">
              <i class="fas fa-layer-group"></i>
              <p>Base</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="base">
              <ul class="nav nav-collapse">
                <li>
                  <a href="components/avatars.html">
                    <span class="sub-item">Avatars</span>
                  </a>
                </li>
                <li>
                  <a href="components/buttons.html">
                    <span class="sub-item">Buttons</span>
                  </a>
                </li>
              </ul>
            </div>
          </li> --}}

                {{-- SIDEBAR ADA CUCU --}}
                {{-- <li class="nav-item">
            <a data-bs-toggle="collapse" href="#submenu">
              <i class="fas fa-bars"></i>
              <p>Menu Levels</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="submenu">
              <ul class="nav nav-collapse">
                <li>
                  <a data-bs-toggle="collapse" href="#subnav1">
                    <span class="sub-item">Level 1</span>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="subnav1">
                    <ul class="nav nav-collapse subnav">
                      <li>
                        <a href="#">
                          <span class="sub-item">Level 2</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="sub-item">Level 2</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a data-bs-toggle="collapse" href="#subnav2">
                    <span class="sub-item">Level 1</span>
                    <span class="caret"></span>
                  </a>
                  <div class="collapse" id="subnav2">
                    <ul class="nav nav-collapse subnav">
                      <li>
                        <a href="#">
                          <span class="sub-item">Level 2</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href="#">
                    <span class="sub-item">Level 1</span>
                  </a>
                </li>
              </ul>
            </div>
          </li> --}}
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
      const navLinks = document.querySelectorAll(".nav-item a");
      navLinks.forEach(link => {
          if (link.href === window.location.href) {
              link.closest(".nav-item").classList.add("active");
          }
      });
  });
</script>
