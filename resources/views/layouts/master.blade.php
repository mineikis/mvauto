<!DOCTYPE html>
<html lang="lt">

<head>

    <!-- Meta Tags
    ================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="MVAuto - Naudoti automobiliai">
    <meta name="keywords" content="naudoti, automobiliai, automobilis, pirkti, parduoti, parduodamas" />
    <meta name="author" content="Karolis Mineikis">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title
    ================================================== -->
    <title>@lang('labels.title')</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    @yield('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- Favicon
    ================================================== -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon">

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

   @yield('content')

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
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
    <!-- Javascript
    ================================================== -->
    <script type="text/javascript" src="{{ URL::asset('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyA7iZeCdciPksBYdMethLvkHLQqT3eSshE') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.dscountdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/chosen.jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.themepunch.plugins.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/easyResponsiveTabs.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.knob.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/retina-1.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.mapmarker.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
    @yield('scripts')
    <!-- End Document
    ================================================== -->
</body>

</html>
