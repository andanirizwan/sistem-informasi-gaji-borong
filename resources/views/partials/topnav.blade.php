<form class="form-inline mr-auto" action="">
  <ul class="navbar-nav mr-3">
    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
  </ul>
</form>
<ul class="navbar-nav navbar-right">
  <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
    <div class="d-sm-none d-lg-inline-block">Hi, John Doe</div></a>
    <div class="dropdown-menu dropdown-menu-right">
      <div class="dropdown-title">Welcome, John Doe</div>
      <a href="#" class="dropdown-item has-icon">
        <i class="far fa-user"></i> Profile Settings
      </a>
      <div class="dropdown-divider"></div>
      <a rel="nofollow" href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>

      {{-- <a href="#" class="dropdown-item has-icon text-danger">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a> --}}
      
    </div>
  </li>
</ul>

