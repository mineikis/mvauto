<!DOCTYPE html>
<html lang="lt">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110602435-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-110602435-1');
    </script>

    <meta charset="utf-8">
    <meta name="description" content="MVAuto - Naudoti automobiliai">
    <meta name="keywords" content="naudoti, automobiliai, automobilis, pirkti, parduoti, parduodamas" />
    <meta name="author" content="Karolis Mineikis">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('labels.title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    @yield('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Analytics
    ================================================== -->
    {{--  <script>
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
    </script>  --}}
</head>

<body>
	
   @section('header')
   @include('header')
   @show

   @yield('content')

  @section('footer')
  @include('footer')
  @show

    <div class="to-top">
        <a href="#">
            <span class="icon-arrow-up"></span>
        </a>
    </div>

    <script type="text/javascript" src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js') }}"></script>
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

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
