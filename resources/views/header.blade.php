
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
                            <img src="{{ URL::asset('images/logo.png') }}" title="MVAuto" alt="MVAuto" />
                        </a>
                    </div>
                    <!-- .logo -->

                    <!-- navigation -->
                    <nav>

                        <!-- navigation wrap -->
                        <div class="main-nav">

                            <!-- navigation search -->
                            <div class="nav-search">
                                <form method="post" action="#">
                                    <fieldset>
                                        <span class="icon-search"></span>
                                        <input type="text" value="Type term and hit enter..." onfocus="if(this.value=='Type term and hit enter...'){this.value=''}" onblur="if(this.value==''){this.value='Type term and hit enter...'}" />
                                    </fieldset>
                                </form>
                            </div>
                            <!-- .navigation search -->

                            <!-- main navigation -->
                            <ul class="main-navigation">

                                <li><a href="pradzia">@lang('labels.pradzia')</a> 
								</li>
								<!-- 
								<li><a href="apiemus">@lang('labels.apiemus')</a> 
								</li> 
								-->
								<li><a href="automobiliai">@lang('labels.automobiliai')</a> 
								</li>
								<li><a href="kontaktai">@lang('labels.kontaktai')</a> 
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
	