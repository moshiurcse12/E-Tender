<!-- Top Nav   -->
<div class="top-nav">
  <div class="container">
    <ul class="float-right">
      @if(Auth::guard('web')->check())
      <li><a href="{{ route('user.logout') }}" class="btn btn-info btn-my-sm" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">Logout</a>
      <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
        @csrf
      </form></li>
      @else
      <li><a href="{{ route('registerUserForm') }}" class="btn btn-info btn-my-sm">Sign Up Now</a></li>
      <li><a href="{{ route('user.login') }}" class="btn btn-info btn-my-sm">Login</a></li>
      @endif
    </ul>
    <div class="clearfix"></div>
  </div>
</div>


<!-- Site Title + Header -->
<div class="site-header">
  <div class="container" style="max-height:50px;">
    <div class="row">
      <div class="col-md-3">
        <img src="{{ asset('public/images/myTender.png') }}" style="height:fit-content;" class="img img-fluid">
      </div>
      <div class="col-md-6">
        <h2>O N L I N E    T E N D E R</h2>
{{-- <div class="search-box">
  <input class="search-txt" type="text" name="" placeholder="Type to search">
  <a href="search-btn" href="#"></a>
  <i class="fas fa-search"></i>
</div> --}}
      </div>
      <div class="col-md-3">
        <div class="social float-right">
          <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-twitter text-info" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-youtube text-danger" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-google-plus-official" aria-hidden="true"></i></a>
        </div>
        <div class="clearfix"></div>
      </div>
    </div> <!-- end .row -->

  </div>
</div>
<!-- Site Title + Header -->


<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-light main-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}"><i class="fa fa-home"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('index') }}">All</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('allTender') }}">All Tenders</a>
        </li>
        @if(Auth::guard('web')->check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My Tenders
          </a>

                  {{-- Account-role for tenderer and contractor --}}

          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @if(Auth::guard('web')->user()->account_role == 'tenderer')
            <a class="dropdown-item" href="{{ route('user.tender.index') }}">Tenders </a>
            <a class="dropdown-item" href="{{ route('user.tender.create') }}">Add Tender</a>

            
            @elseif(Auth::guard('web')->user()->account_role == 'contractor')
            <a class="dropdown-item" href="{{ route('user.tender.index') }}">Tenders </a>
            @endif
          </div>
        </li>
        @endif



        
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tender Categoris
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <ul class="list-group">
              @foreach(\App\Models\Category::orderBy('id', 'ASC')->get() as $category)
              <li class="list-group-item"><a href="{{ route('categoryTender', $category->slug) }}">{{ $category->name }}</a></li>
              @endforeach
            </ul>

          </div>
        </li>
<li class="nav-item active">
          <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form action="{{ route('searchQuery') }}" method="post">
            @csrf
            <div class="input-group">
              <input type="text" name="searchQuery" class="form-control" placeholder="Search for..." aria-label="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
        </li>
      </ul>

    </div>
  </div>
</nav>
<!-- End Main Navbar -->
