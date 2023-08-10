<aside class="main-sidebar sidebar-dark-info  nav-legacy elevation-4">
  <!-- Brand Logo -->
  <div class="image logo-switch" style="padding-bottom: 200px">
    <img src="{{ asset('img/polinemakecil.png') }}" alt="Logo Small" class="brand-image-xl logo-xs mx-auto d-block" style="left: 12px;">
    <img src="{{ asset('img/Polinema.png') }}" alt="Logo Large" class=" logo-xl mx-auto d-block" style="left: 50px; top: 20px">
  </div>
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link @yield('st0')">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        @if(Auth::user())
        <li class="nav-header">DATA</li>
        <li class="nav-item">
          <a href="{{route('kerjasama.index')}}" class="nav-link @yield('st1')">
            <i class="nav-icon fas fa-hands"></i>
            <p>
              @if(Auth::user()->getRoleNames() == '["Admin"]')
              Data Kerjasama
              @else
              Data Kerjasama
              @endif
              <!-- <i class="fas fa-angle-left right"></i> -->
            </p>
          </a>
        </li>
        @if(Auth::user()->getRoleNames() == '["Admin"]')
        <li class="nav-item">
          <a href="{{route('users.index')}}" class="nav-link @yield('st2')">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Manage User
              <!-- <i class="fas fa-angle-left right"></i> -->
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('email.index')}}" class="nav-link @yield('st3')">
            <i class="nav-icon fa fa-bell"></i>
            <p>
              Notifikasi
            </p>
          </a>
        </li>
        @endif
        @endif
      </ul>
    </nav>
  </div>
</aside>