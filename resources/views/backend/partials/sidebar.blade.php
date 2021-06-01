<!-- Left Sidebar -->
<div class="left main-sidebar">
  <div class="sidebar-inner leftscroll">
    <div id="sidebar-menu">
      <ul>
        <li class="submenu">
          <a class="{{ (Route::is('admin.dashboard') ? 'active' : '') }}" style="    color:#FFF;
    -webkit-box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);
-moz-box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);
  box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);margin-top:30px;" href="{{ route('admin.dashboard') }}" title="Dashboard"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
        </li>

        <li class="submenu">
          <a class="{{ (Route::is('admin.category.index') ? 'active' : '') }}" style="    color:#FFF;
    -webkit-box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);
-moz-box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);
box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);margin-top:30px;" href="{{ route('admin.category.index') }}" title="Category"><i class="fa fa-fw fa-user"></i><span> Category </span> </a>
        </li>

        <li class="submenu">
          <a class="{{ (Route::is('admin.user.index') ? 'active' : '') }}" style="    color:#FFF;
    -webkit-box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);
-moz-box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);
box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);margin-top:30px;" href="{{ route('admin.user.index') }}" title="User"><i class="fa fa-fw fa-user"></i><span> User </span> </a>
        </li>

        <li class="submenu">
          <a class="{{ (Route::is('admin.tender.index') ? 'active' : '') }}" style="    color:#FFF;
    -webkit-box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);
-moz-box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);
box-shadow: 4px 9px 18px 0px rgba(22,47,110,0.63);margin-top:30px;" href="{{ route('admin.tender.index') }}" title="Tender"><i class="fa fa-fw fa-user"></i><span> Tender </span> </a>
        </li>
      </ul>

      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!-- End Sidebar -->
