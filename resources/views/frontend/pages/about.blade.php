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
  	
    


		      <div class="card cards login" style="margin-top:20px;background-color:#3f485c; ">
		        <div class="card-body" style="color: #ddd;">
		        	<h3 style="text-align:center;text-orientation:inherit;margin-top:10px;color:#ddd;">About Us</h3>
		           
					
					<p>Tenderall.com is the fastest growing tender Service System portal of Bangladesh. It is the largest such platform that brings the bidders and inviters together to exchange business procurement information. We provide customized solutions developed from very scratch to a point of Excellency and stick to the requirement of the clients till their complete satisfaction. At present you don’t need to buy such amount of magazines for getting the information about the tender rather you just go to our website and get all the information you need.</p>
					<p>This website provides accurate information and services to our valuable members with shortest possible time with no repetitive news.<br>
					We gather all the tender related information from various types of newspapers and sources and put those into our websites under different category so that you can easily find out what you want.</p>
					<p>If you want to get the e-mail notification about the required tender, you just select the category and e-mail notification system will activate and you get the desire tender notification in your e-mail regularly with no repetitive postings. </p>
					<p>Register Today! Expand your business! You can save both of your valuable time and money.</p>
		          
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