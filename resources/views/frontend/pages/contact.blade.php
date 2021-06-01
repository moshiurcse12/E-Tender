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
  	<h3 style="text-align:center;text-orientation:inherit;margin-top:10px;border:3px solid gray;color:#2d3469;">Contact With Us</h3>
    <div class="row">
    		<div class="col-md-6 mt-5">


		      <div class="card cards login" style=" ">
		        <div class="card-body" style="color: #ddd;">
		           <img src="{{ asset('public/images/users/1531517976.jpg')}}"  class="rounded" alt="" width="140" height="150" style="margin-bottom:20px;">
					<h4>Md.Moshiur Rahman Khan</h4>
					<p>Email : moshiur12@cse.pstu.ac.bd</p>
					<p>Phone : 01796553048</p>
					<p>Address: 76/B,Kristopur,Mymensingh</p>
					<p></p>
		          
		        </div>
		      </div>
    		</div>

    		<div class="col-md-6 mt-5">

		      <div class="card cards login" style=" ">
		        <div class="card-body" style="color: #ddd;">
		          
				<img src="{{ asset('public/images/users/31895256_1576660549127610_9122289835514527744_n.jpg')}}"  class="rounded" alt="" width="140" height="150" style="margin-bottom:20px;">
					<h4>Zobayer Alahe Khan</h4>
					<p>Email : zobayer.pstu.cse.12@gmail.com</p>
					<p>Phone : 01799664489</p>
					<p>Address: Bhola,Barishal</p>
					<p></p>
		          
		        </div>
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