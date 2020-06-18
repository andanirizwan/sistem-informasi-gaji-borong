<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">SIGAF</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(env('APP_NAME'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    {{-- <li class="menu-header">Dashboard</li> --}}
    <li class="{{ request()->is('home') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/home') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
    <li class="{{ request()->is('absensi') ? 'active' : '' }}"><a href="{{ url('absensi') }}"><i class="fas fa-user"></i> <span>Riwayat absensi</span></a></li>
    <li class="{{ request()->is('kerjaan') ? 'active' : '' }}"><a href="{{ url('kerjaan') }}"><i class="fas fa-file"></i> <span>Kerjaan</span></a></li>
    <li class="{{ request()->is('laporan') ? 'active' : '' }}"><a href="{{ url('laporan') }}"><i class="fas fa-newspaper"></i> <span>Laporan Pekerjaan</span></a></li>

  </ul>
</aside>
