<header>
    <div class="top-bar">
        <div class="container">
            <div class="row">
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
                    <a rel="alternate" class="tip-below success" href="/logout">Logout</a>
                    </div>
                    @endguest
                </div>
                <!-- language -->

            </div>
        </div>
    </div>

    <div class="navigation clearfix">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a href="/">
                        <img src="{{ URL::asset('images/logo.png') }}" title="{{Config::get('constants.imones_pav')}}" alt="{{Config::get('constants.imones_pav')}}" />
                    </a>
                </div>
                <nav>
                    <div class="main-nav">
                        <ul class="main-navigation nav-1 inline">
                            <li><a href="/" class="{{ Request::is(LaravelLocalization::getCurrentLocale()) ? 'active' : ''}}">@lang('labels.pradzia')</a> 
                            </li>
                            <li><a href="/automobiliai/1" class="{{ Request::is(LaravelLocalization::getCurrentLocale().'/automobiliai/1') ? 'active' : ''}}">@lang('labels.automobiliai')</a> 
                            </li>
                            <li><a href="/greitai/1" class="{{ Request::is(LaravelLocalization::getCurrentLocale().'/greitai/1') ? 'active' : ''}}">@lang('labels.greitai')</a> 
                            </li>
                            <li><a href="/kontaktai" class="{{ Request::is(LaravelLocalization::getCurrentLocale().'/kontaktai') ? 'active' : ''}}">@lang('labels.kontaktai')</a> 
                            </li>
                            @guest
                            @else
                            <li><a href="/admin" class="{{ Request::is('admin') ? 'active' : ''}}">Admin</a> 
                            </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
