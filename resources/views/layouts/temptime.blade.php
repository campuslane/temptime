<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/css/theme.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/flexslider.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cardo' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	@yield('styles')


</head>
<body>
	
	@include('partials.navbar')
	
	
	<div class="container">
		{{-- <div class="clearfix">
			
			<h1 style="font-family:Lora;" class="pull-left"><i class="fa fa-clock-o main-color" style="font-size:40px;"></i> TempTime</h1>
			<div class="pull-right" style="padding-top:12px; font-size:20px; font-weight:300; color:#777; font-family:Lora">
				Monroe Personnel Service, LLC
			</div>
		</div> --}}

		{{-- <div style="text-align:center">
			<img src="/images/tt_banner2.jpg" alt="">
		</div> --}}

	</div>
	<div class="nav-menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 monroe-text">
					Monroe Personnel Service, LLC
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 call-us-text">
					Give us a Call <i class="fa fa-phone main-color"></i> (415) 732-7520
				</div>
			</div>
			
			
		</div>
	</div>
	
	<div class="container">
			
	@yield('content')

	</div>

	<br>
	<br>
	<br>

	<div class="footer">
		<div class="container">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<h4>Site</h4>
				<ul class="fa-ul" >
						<li><i class="fa-li fa fa-chevron-right"></i><a href="/">Home</a></li>
						<li><i class="fa-li fa fa-chevron-right"></i><a href="/about">About</a></li>
						<li><i class="fa-li fa fa-chevron-right"></i><a href="/job-seekers">Job Seekers</a></li>
						<li><i class="fa-li fa fa-chevron-right"></i><a href="/employers">Employers</a></li>
						<li><i class="fa-li fa fa-chevron-right"></i><a href="/contact">Contact</a></li>
						
					</ul>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">

				<h4>Resources</h4>
				<ul class="fa-ul">
						<li><i class="fa-li fa fa-chevron-right"></i><a href="/job-openings">Job Openings</a></li>
						<li><i class="fa-li fa fa-chevron-right"></i><a href="/forms">Forms & Resources</a></li>
				</ul>

				<h4>Follow Us!</h4>
				<ul class="fa-ul">
						<li><i class="fa-li fa fa-chevron-right"></i><a href="/job-openings"><i class="fa fa-twitter"></i> Twitter</a></li>
						<li><i class="fa-li fa fa-chevron-right"></i><a href="/forms"><i class="fa fa-facebook"></i> Facebook</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<h4>Contact</h4>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, nesciunt. Repellat aut unde, labore vitae enim fugit? Nesciunt eum, minus similique illum ut, perspiciatis, aspernatur reiciendis libero magnam aliquid incidunt.
			</div>
		</div>
	</div>

	<div class="copyright-footer">
		Copyright 2015 Monroe Personnel Service, LLC &nbsp; | &nbsp; <a href="/openings">Admin</a>
	</div>




	<script src="/js/app.js"></script>
	<script src="/js/jquery.flexslider-min.js"></script>

	<!-- Place in the <head>, after the three links -->
	<script type="text/javascript" charset="utf-8">
	  $(window).load(function() {
	    $('.flexslider').flexslider({
	    	controlNav: false, 
	    	directionNav: false, 
	    	animationSpeed: 2000, 
	    	touch: false
	    });
	  });
	</script>

	@yield('scripts')

</body>
</html>