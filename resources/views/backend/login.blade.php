<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<meta name="description" content="NamDev Admin Template.">
	<meta name="author" content="NamDev">
	<meta name="keyword" content="NamDev, Dashboard, Bootstrap, Admin, Template, Responsive, Fluid">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="{{ asset('backend/img/favicon.png') }}">
</head>

<body style="background: url({{ asset('backend/img/bg-login.jpg') }}) !important;">
    <div class="container-fluid-full">
		<div class="row-fluid">
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="{{ route('home') }}"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login to your account</h2>
					@if (Session::has('error'))
						<p class="alert-danger">
							{{ Session::get('error') }}
						</p>
					@endif
					<form class="form-horizontal" action="{{ route('admin.login') }}" method="POST">
						@csrf
						<fieldset>
							<div class="input-prepend" title="Email">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="email" type="text" id='email' placeholder="Enter Email Address"/>
							</div>
							<div class="clearfix"></div>
							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="Enter Password"/>
							</div>
							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
						</fieldset>
					</form>
				</div>
			</div>
	    </div>
    </div>
	
    <script src="{{ asset('backend/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery-migrate-1.0.0.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery-ui-1.10.0.custom.min.js') }}"></script>
    <script src="{{ asset('backend/js/modernizr.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('backend/js/excanvas.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.uniform.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$("#email").focus(function() {
				$(this).parent(".input-prepend").addClass("input-prepend-focus");
			});
			$("#email").focusout(function() {
				$(this).parent(".input-prepend").removeClass("input-prepend-focus");
			});
			$("#password").focus(function() {
				$(this).parent(".input-prepend").addClass("input-prepend-focus");
			});
			$("#password").focusout(function() {
				$(this).parent(".input-prepend").removeClass("input-prepend-focus");
			});
		});
	</script>
</body>
</html>
