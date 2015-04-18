<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Trusatu | Login</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
		
		<href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		 <link href="{{ asset('/css/app.min.css') }}" rel="stylesheet">
         <link href="{{ asset('/css/cmt.css') }}" rel="stylesheet">

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>
<body class="loginPage">
	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	<div class="container">
		<a href="{{ url('/') }}" title="#" class="back btn-effect">
			<span class="sprite icon"></span> Back
		</a>
		
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

				
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="loginRegistrationForm" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">


						<h1 class="text-center">Login</h1>
					<div class="input">
					
							
						<input type="email" class="form-control input-field" name="email" value="{{ old('email') }}">
						<label class="input-label">
						<span class="input-label-content">Email Address</span>	
							</label>
						</div>


						<div class="input">
						<input type="password" class="form-control input-field" name="password">
						<label class="input-label">
							<span class="input-label-content">Password</span>
						</label>
					</div>

						
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
							

						
							
								<button type="submit" class="btn btn-lg btn-yellow btn-effect">Login</button>

								<label>

								<a class="forgotPassword" href="{{ url('/password/email') }}">Forgot Your Password?</a>

								</label>
							</div>
						</div>
					</form>
				</div>
		
	
	<!-- JS -->
	 <script src="{{ assets('/js/jquery-1.11.2.min.js')}}"></script>
	 <script src="{{ assets('/js/bootstrap.min.js')}}"></script>
	  <script src="{{ assets('/js/owl.carousel.min.js')}}"></script>
	   <script src="{{ assets('/js/skrollr.min.js')}}"></script>
	   <script src="{{ assets('/js/classie.js')}}"></script>
		<script src="{{ assets('/js/app.min.js')}}"></script>
	 <script src="{{ assets('/js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
	

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
	<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X');ga('send','pageview');
	</script> -->
</body>
</html>