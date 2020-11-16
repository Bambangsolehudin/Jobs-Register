<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <i class="fas fa-hotel"></i>
    </div>
    <div class="sidebar-brand-text mx-3">F-Company</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{url('dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{url('posts')}}">
      <i class="fas fa-fw fa-mail-bulk"></i>
      <span>Post</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{url('gallery')}}">
      <i class="fas fa-fw fa-mail-bulk"></i>
      <span>Galleries</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{url('status', Auth::user()->id)}}">
      <i class="fas fa-fw fa-images"></i>
      <span>Status Kelulusan</span></a>
  </li>
</ul>
<!-- End of Sidebar -->