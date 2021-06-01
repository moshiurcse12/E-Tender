<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Tender @yield('head-title')</title>

  <link rel="stylesheet" href="{{ asset('public/css/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/custom/main.css') }}">
</head>

<body>
  @include('frontend.partials.navbar')
  <div class="container">
    <div class="col-md-6 offset-md-3 mt-5">

      <div class="card cards login" style=" ">
        <div class="card-body" style="color: #ddd;">
          @include('frontend.partials.message')

          <form class="form-signin pt-5" method="POST" action="{{ route('user.login.submit') }}">
            @csrf
            <h2 class="form-signin-heading">User Login</h2>

            @if ( Session::has('login_error') )
              <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {!! Session::get('login_error') !!}
              </div>
            @endif

            <div class="form-group">
              <label for="inputEmail">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group mt-2">
              <label for="inputPassword">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
              </label>
            </div>

            <div class="form-group">
              <div class="col-md-6">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-sign-in"></i> Login
                </button>

                <a class="btn btn-link" href="{{ route('user.password.request') }}">Forgot Your Password?</a>
              </div>
            </div>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @include('frontend.partials.footer')


  <script type="text/javascript" src="{{ asset('public/js/jquery/jquery-3.3.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/js/jquery/jquery-easing.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/js/bootstrap/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/js/bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>
