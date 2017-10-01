
<header>
	
   <!-- ================================================== HEADER ================================================== -->
   <header>

    <!-- top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                    <!-- notification
                    <div class="notification">
                        <p>This is simple notification message and you can insert <a href="#">anchor</a> inside too.</p>
                    </div>
                    .notification -->
                    <!-- .call us -->

                    <!-- language -->
                    <div class="social">
                      <ul class="clearfix">
                          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                          <li>
                            <a rel="alternate" class="tip-below success" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['abbr'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @guest
                    @else
                    <div class="social">
                    <a rel="alternate" class="tip-below success" href="logout">Logout</a>
                    </div>
                    @endguest
                </div>
                <!-- language -->

            </div>
        </div>
    </div>
    <!-- .top bar -->

    <!-- navigation and logo -->
    <div class="navigation clearfix">
        <div class="container">
            <div class="row">

                <!-- logo -->
                <div class="logo">
                    <a href="/">
                        <img src="{{ URL::asset('images/logo.png') }}" title="{{Config::get('constants.imones_pav')}}" alt="{{Config::get('constants.imones_pav')}}" />
                    </a>
                </div>
                <!-- .logo -->

                <!-- navigation -->
                <nav>

                    <!-- navigation wrap -->
                    <div class="main-nav">

                        <!-- main navigation -->
                        <ul class="main-navigation nav-1 inline">
                            <li><a href="/" class="{{ Request::is(LaravelLocalization::getCurrentLocale()) ? 'active' : ''}}">@lang('labels.pradzia')</a> 
                            </li>
                            <li><a href="/automobiliai/1" class="{{ Request::is(LaravelLocalization::getCurrentLocale().'/automobiliai/1') ? 'active' : ''}}">@lang('labels.automobiliai')</a> 
                            </li>
                            <li><a href="/kontaktai" class="{{ Request::is(LaravelLocalization::getCurrentLocale().'/kontaktai') ? 'active' : ''}}">@lang('labels.kontaktai')</a> 
                            </li>
                        </ul>
                        <!-- .main navigation -->

                    </div>
                    <!-- .navigation wrap -->

                </nav>
                <!-- .navigation -->

            </div>
        </div>
    </div>
    <!-- .navigation and logo -->

</header>
<!-- ================================================== END HEADER ================================================== -->
