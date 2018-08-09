<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard Admin || E-Shopper</title>
	<meta name="description" content="NamDev Admin Template.">
	<meta name="author" content="NamDev">
	<meta name="keyword" content="NamDev, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="bootstrap-style" href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="{{ asset('backend/img/favicon.png') }}">
</head>

<body>
	@include('backend.layouts.header')
	
    <div class="container-fluid-full">
		<div class="row-fluid">
			@include('backend.layouts.aside')
			
			<div id="content" class="span10">
                @yield('content')
            </div><!--/.fluid-container-->
        </div><!--/#content.span10-->
    </div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	<div class="clearfix"></div>
	
	@include('backend.layouts.footer')
    
    <script src="{{ asset('backend/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery-migrate-1.0.0.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery-ui-1.10.0.custom.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.ui.touch-punch.js') }}"></script>
    <script src="{{ asset('backend/js/modernizr.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.cookie.js') }}"></script>
    <script src='{{ asset('backend/js/fullcalendar.min.js') }}'></script>
    <script src='{{ asset('backend/js/jquery.dataTables.min.js') }}'></script>
    <script src="{{ asset('backend/js/excanvas.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.chosen.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.uniform.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.cleditor.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.noty.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.elfinder.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.raty.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.iphone.toggle.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.uploadify-3.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.gritter.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.imagesloaded.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.masonry.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.knob.modified.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backend/js/counter.js') }}"></script>
    <script src="{{ asset('backend/js/retina.js') }}"></script>
    <script src="{{ asset('backend/js/custom.js') }}"></script>
    @yield('script')
</body>
</html>
