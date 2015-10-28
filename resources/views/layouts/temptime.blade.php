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

	<style>
		/*Caption Text*/
		.flex-caption {
		    top:30%;
		    right:10%;
		    width:40%;
		    color: white;
		    font-size: 16px;
		    line-height: 20px;
		    
		    padding:0 20px;
		    position:absolute;
		  
		    text-transform: uppercase;
		    z-index:1;
		    padding:20px;
		    border:2px solid white;
		    border-radius:4px;
		    display:block;
		    background: rgb(237, 198, 99); /* The Fallback */
   			background: rgba(237, 198, 99, 0.85); 

   			background: rgb(0, 0, 0); /* The Fallback */
   			background: rgba(0, 0, 0, 0.50);
		}

		.top-bar {
		
			height:20px;
		}

	</style>
</head>
<body>
	<div class="top-bar main-color">
		
	</div>
	
	
	<div class="container">
		<div class="clearfix">
			
			<h1 style="font-family:Lora;" class="pull-left"><i class="fa fa-clock-o main-color" style="font-size:40px;"></i> TempTime</h1>
			<div class="pull-right" style="padding-top:32px; font-size:20px; font-weight:300; color:#777; font-family:Lora">
				Monroe Personnel Service, LLC
			</div>
		</div>

	</div>
	<div class="nav-menu">
		<div class="container">
			<span class="pull-right" style="font-weight:bold;"><i class="fa fa-phone main-color"></i> (415) 555-1212</span>
			<div style="font-size:14px;">
			HOME &nbsp; &nbsp; ABOUT &nbsp; &nbsp; JOB SEEKERS &nbsp; &nbsp; EMPLOYERS &nbsp; &nbsp; ACCOLADES &nbsp; &nbsp; CONTACT US
			</div>
		</div>
	</div>
	
	<div class="container">
			{{-- <div class="header-band">
		<div class="container">
			<div class="row">
				

				<div class="col-lg-6 col-md-6 col-sm-6" style="margin-top:-20px; margin-bottom:-20px;">
					{{-- <img src="/images/sf1.jpg" class="img-responsive " alt="San Francisco Skyline"> --}}
				{{-- </div>
			</div>
		</div>
	</div>  --}}
			<!-- Place somewhere in the <body> of your page -->
			<div class="flexslider" style="margin-bottom:20px; background:#eee;">
			  <ul class="slides">
			    <li>
			      <img src="/images/sf1.jpg" />
			      <span class="flex-caption">The Right Staffing Solutions for your Business</span>
			    </li>
			    <li>
			      <img src="/images/smiling.jpg" />
			      <span class="flex-caption">Place Hold It Image</span>
			    </li>
			    <li>
			      <img src="/images/woman-standing.jpg" />
			      <span class="flex-caption">Place Hold It Image</span>
			    </li>
			  </ul>
			</div>

		</div>
	

	

	@yield('content')

	<br>
	<br>
	<br>




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