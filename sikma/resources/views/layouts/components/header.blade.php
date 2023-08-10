<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    @guest
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('login')}}" class="nav-link">{{ __('Login') }}</a>
    </li>
    @else

    
    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="https://picsum.photos/300/300" class="user-image img-circle elevation-2" alt="Dhimas Arbi">
        <span class="d-none d-md-inline">
          {{Auth::user()->name}}
        </span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <li class="user-header bg-primary">
          <img src="https://picsum.photos/300/300" class="img-circle elevation-2" alt="Dhimas Arbi">
          <p class="">
            {{Auth::user()->name}}
            <small>Tetap Semangat!!</small>
          </p>
        </li>
        <li class="user-footer">
          <!-- <a href="http://localhost:8000/profile/username" class="btn btn-default btn-flat">
            <i class="fa fa-fw fa-user"></i>
            Profile
          </a> -->
          <a class="btn btn-default btn-flat float-right " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-fw fa-power-off"></i>
            Log Out
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            <!-- <input type="hidden" name="_token" value="TsPYZzbTvlx2eDfo5gflXiN23kXf1XJu6V54a48O"> -->
          </form>
        </li>
      </ul>
    </li>
    @endguest
  </ul>
</nav>