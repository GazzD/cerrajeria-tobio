<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
    <head>
    	<!-- Meta Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Insert Your Site Description" /> 
		<!-- Mobile Specifics -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="HandheldFriendly" content="true"/>
		<meta name="MobileOptimized" content="320"/>
		<!-- Mobile Internet Explorer ClearType Technology -->
		<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->
        <title>||| Cerrajería Tobío ||| cierres, portales, balcones, puertas, puertas entrada, puertas seccionales, pasamanos, automatismos |||</title>
        <!-- Bootstrap -->
        {!!Html::style('css/bootstrap.min.css')!!}
        <!-- Main Style -->
        {!!Html::style('css/main.css')!!}
		<!-- Supersized -->
        {!!Html::style('css/supersized.css')!!}
        {!!Html::style('css/supersized.shutter.css')!!}
		<!-- FancyBox -->
        {!!Html::style('css/fancybox/jquery.fancybox.css')!!}
		<!-- Font Icons -->
        {!!Html::style('css/fonts.css')!!}
		<!-- Shortcodes -->
        {!!Html::style('css/shortcodes.css')!!}
		<!-- Responsive -->
        {!!Html::style('css/bootstrap-responsive.min.css')!!}
        {!!Html::style('css/responsive.css')!!}
		<!-- Supersized -->
        {!!Html::style('css/supersized.css')!!}
        {!!Html::style('css/supersized.shutter.css')!!}
        <!-- Google Font -->
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
		
		<!-- Fav Icon -->
		<link rel="shortcut icon" href="#">
		
		<link rel="apple-touch-icon" href="#">
		<link rel="apple-touch-icon" sizes="114x114" href="#">
		<link rel="apple-touch-icon" sizes="72x72" href="#">
		<link rel="apple-touch-icon" sizes="144x144" href="#">
		
		<!-- Modernizr -->
		{!!Html::script('js/modernizr.js')!!}
		
		<!-- Analytics -->
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'Insert Your Code']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		<!-- End Analytics -->
    </head>

    <body>
    	@include('includes.carousel')
    	@include('includes.menu')
        @yield('content')
        
        <!-- Js -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
		<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
		{!!Html::script('js/supersized.3.2.7.min.js')!!} <!-- Slider -->
		{!!Html::script('js/waypoints.js')!!} <!-- WayPoints -->
		{!!Html::script('js/waypoints-sticky.js')!!} <!-- Waypoints for Header -->
		{!!Html::script('js/jquery.isotope.js')!!} <!-- Isotope Filter -->
		{!!Html::script('js/jquery.fancybox.pack.js')!!} <!-- Fancybox -->
		{!!Html::script('js/jquery.fancybox-media.js')!!} <!-- Fancybox for Media -->
		{!!Html::script('js/jquery.tweet.js')!!} <!-- Tweet -->
		{!!Html::script('js/plugins.js')!!} <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
		{!!Html::script('js/main.js')!!} <!-- Default JS -->
		<!-- End Js -->
    </body>
</html>