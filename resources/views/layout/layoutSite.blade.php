<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt">
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="{{ url('/layout/') }}/css/calendar.css" media="screen">
	
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title> {{ Config::get( 'constants.SYS_TITLE' )  }} </title>
	<meta name="description" content>
	<meta name="author" content>
	<link rel="icon" type="image/png" href="{{ url('/layout/') }}/images/favicon.png">
	<meta name="description" content>
	<meta name="author" content>
	<link rel="icon" type="image/png" href="{{ url('/layout/') }}/images/favicon.png">
	<meta name="description" content>
	<meta name="author" content>
	<link rel="icon" type="image/png" href="{{ url('/layout/') }}/images/favicon.png">
	<!-- CSS Style -->
	<link rel="stylesheet" href="{{ url('/layout/') }}/css/all2.css" type="text/css" media="all">
	<!-- ResponsiveCSS Style -->
	<link rel="stylesheet" href="{{ url('/layout/') }}/css/responsive.css" type="text/css" media="all">
	<!-- CSS ShortCode -->
	<link rel="stylesheet" href="{{ url('/layout/') }}/css/shortcode.css" type="text/css" media="all">
	<!-- Start JavaScript -->
	<link rel="stylesheet" href="{{ url('/layout/') }}/css/javascri.css" type="text/css" media="all">
	<!-- gallery CSS -->
	<link rel="stylesheet" href="{{ url('/layout/') }}/css/prettyPhoto.css" type="text/css" media="all">
	<!-- Start Player CSS -->
	<link rel="stylesheet" href="{{ url('/layout/') }}/css/player.css" type="text/css" media="all">
	<!-- Style Switcher CSS -->
	<link rel="stylesheet" href="{{ url('/layout/') }}/css/default.css" id="stylesheet">
	<!-- Megamenu CSS -->
	<link rel="stylesheet" href="{{ url('/layout/') }}/css/megamenu.css" type="text/css" media="screen" />
	
	<!--<link rel="stylesheet" href="{{ url('/layout-admin/vendor/') }}/bootstrap/css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{ url('/layout-admin/vendor/') }}/bootstrap/css/bootstrap.min.css" type="text/css" media="all">
	-->
	<script type="text/javascript">
	function changeStyle(url) {
	document.getElementById('stylesheet').href ='{{ url("/layout/") }}/css/'+url;
	}
	</script>
	
	<!-- End JavaScript -->
	<!--[if lt IE 9]>
	      <script src="js/html5.js"></script>
	<![endif]-->
    @yield( 'dependencyCss' )
</head>

<body onload="calendario();">
	<!--<ul id="sheetswitch">
	  <li><a href="#" class="default" onClick="changeStyle('default.css');return false;" >black</a></li>
	  <li><a href="#" class="blue" onClick="changeStyle('blue.css');return false;" >white</a></li>
	  <li><a href="#" class="green" onClick="changeStyle('green.css');return false;" >white</a></li>
	  <li><a href="#" class="perpul" onClick="changeStyle('perpul.css');return false;" >white</a></li>
	  <li><a href="#" class="brown" onClick="changeStyle('brown.css');return false;" >white</a></li>
  </ul>  -->
  <div class="wrapper"> 
	  <!-- header -->
	  <div class="main">
	
		@include( 'layout.header' )
		
	    @yield('content') 
      </div>
        @include( 'layout.footer' )
    </div>
	
	<!-- Core JavaScript Files -->
	<script src="{{ url('/layout/') }}/js/jquery-1.js"></script><!-- jQuery library --> 
	<script type="text/javascript" src="{{ url('/layout/') }}/js/jquery.slideshow.js"></script><!-- jQuery main banner --> 
	<script src="{{ url('/layout/') }}/js/jquery-u.js"></script><!-- jQuery Ui --> 
	<script src="{{ url('/layout/') }}/js/sourtin-jquery.js"></script><!-- sourtin-jquery --> 
	<script src="{{ url('/layout/') }}/js/jqueryi-icon-menu.js"></script><!-- Js For all Small Style  --> 
	<script src="{{ url('/layout/') }}/js/tytabs.js"></script><!-- jQuery Plugin tytabs  --> 
	<script type="text/javascript" src="{{ url('/layout/') }}/js/speakker-big-1.2.02r134.min.js"></script> 
	<script type="text/javascript" src="{{ url('/layout/') }}/js/jquery-inner-slider.js"></script><!-- inner-slider --> 
	<script src="{{ url('/layout/') }}/js/jquery.timelinr-0.9.52.js"></script><!-- timline-slider --> 
	<script src="{{ url('/layout/') }}/js/browser-detect.js"></script> <!-- Browser-Detect --> 
	<script src="{{ url('/layout/') }}/js/sticky-header.js"></script> <!-- Sticky-header -->
	<script src="{{ url('/layout/') }}/js/jquery.countdown.js"></script>

    @yield( 'dependencyJs' )
</body>

</html>
