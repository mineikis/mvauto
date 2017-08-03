<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags
================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="MVauto - Naudoti automobiliai">
    <meta name="keywords" content="responsive, creative, html/css, theme, multicolor" />
    <meta name="author" content="Karolis Mineikis">

    <!-- Site Title
================================================== -->
    <title>Carell - Creative Multifunctional HTML Template</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="css/style.css">

    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- Favicon
================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Google Analytics
================================================== -->
    <script>
    var _gaq = [
        ['_setAccount', 'UA-XXXXX-X'],
        ['_trackPageview']
    ];
    (function(d, t) {
        var g = d.createElement(t),
            s = d.getElementsByTagName(t)[0];
        g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s);
    }(document, 'script'));
    </script>
</head>

<body>
	
	    @section('header')
			@include('header')
        @show
	
	
	
	<div class="container">
		@yield('content')
	</div>
    
		@section('footer')
			@include('footer')
        @show
	
	
	
    <!-- ================================================== TO TOP ================================================== -->
    <div class="to-top">
        <a href="#">
            <span class="icon-arrow-up"></span>
        </a>
    </div>
    <!-- ================================================== TO TOP ================================================== -->

    <!-- Javascript
================================================== -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/jquery.dscountdown.min.js"></script>
    <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/easyResponsiveTabs.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.knob.js"></script>
    <script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.mapmarker.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

    <!-- End Document
================================================== -->
</body>

</html>
