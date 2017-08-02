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

    <!-- ================================================== HEADER ================================================== -->
    <header>

        <!-- navigation and logo -->
        <div class="navigation clearfix">
            <div class="container">
                <div class="row">

                    <!-- logo -->
                    <div class="logo">
                        <a href="/">
                            <img src="images/logo.png" title="MVauto" alt="MVauto" />
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

                                <li><a href="/" class="active">Pradžia</a> 
								</li>
								<li><a href="apiemus">Apie Mus</a> 
								</li>
								<li><a href="automobiliai">Automobiliai</a> 
								</li>
								<li><a href="kontaktai">Kontaktai</a> 
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


    <!-- ================================================== SLIDER ================================================== -->
    <section>
        <div class="bannercontainer">
            <div class="banner">
                <ul>
                    <li data-transition="fade" data-slotamount="1">
                        <img src="images/slide1.png" alt="" title="" />
                        <!-- caption -->
                        <div class="slide-caption caption lft" data-y="300" data-speed="700" data-start="400" data-easing="easeOutBack"></div>
                        <!-- .caption -->

                        <!-- title -->
                        <div class="caption-title caption" data-y="320" data-speed="700" data-start="1200" data-easing="easeOutBack">
                            <h2>SUPERB CONDITION <b>MERCEDES BENZ SLK</b> 
                            </h2>
                        </div>
                        <!-- title -->

                        <!-- tags -->
                        <div class="caption-tags caption" data-y="400" data-speed="700" data-start="1800" data-easing="easeOutBack">
                            <ul class="tag clearfix">
                                <li>{{ $spalva->pavadinimas_lt }}</li>
                                <li>140hp</li>
                                <li>diesel</li>
                                <li>manual</li>
                                <li class="tag-price">
                                    <a href="#" class="clearfix">
                                        <span class="price"><b>$16.450</b> 
                                        </span>
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- .tags -->

                    </li>
                    <li data-transition="fade" data-slotamount="1">
                        <img src="images/slide2.png" alt="" title="" />

                        <!-- caption -->
                        <div class="slide-caption caption lft" data-y="300" data-speed="700" data-start="400" data-easing="easeOutBack"></div>
                        <!-- .caption -->

                        <!-- title -->
                        <div class="caption-title caption" data-y="320" data-speed="700" data-start="1200" data-easing="easeOutBack">
                            <h2>SUPERB CONDITION <b>MERCEDES BENZ SLK</b> 
                            </h2>
                        </div>
                        <!-- title -->

                        <!-- tags -->
                        <div class="caption-tags caption" data-y="400" data-speed="700" data-start="1800" data-easing="easeOutBack">
                            <ul class="tag clearfix">
                                <li>2013</li>
                                <li>140hp</li>
                                <li>diesel</li>
                                <li>manual</li>
                                <li class="tag-price">
                                    <a href="#" class="clearfix">
                                        <span class="price"><b>$16.450</b> 
                                        </span>
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- .tags -->

                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </section>
    <!-- ================================================== END SLIDER ================================================== -->

    <!-- ================================================== LIGHT PROMO ================================================== -->
    <section>
        <div class="light-promo">
            <div class="container">
                <div class="row">
                    <div class="promo">
                        <h1 data-appear-animation="slideInLeft"><b>Welcome to the best car dealership HTML Template</b> 
                        </h1>
                        <p data-appear-animation="slideInRight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem ap
                            <br />eriam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================================== LIGHT PROMO ================================================== -->


    <!-- ================================================== LATEST CARS ================================================== -->

    <section class="space-bottom">
        <div class="latest-cars clearfix">
            <div class="container">
                <div class="row">
                    <div class="heading space-top-and-bottom small">
                        <h2>Latest <b>Cars</b> 
                        </h2>
                        <span></span>
                    </div>

                    <!-- 1st -->
                    <div class="row">

                        <!-- car -->
                        <div class="four columns">
                            <div class="car-box vertical medium" data-appear-animation="slideInLeft">

                                <!-- image -->
                                <div class="car-image">
                                    <a href="#">
                                        <img src="images/car-1.jpg" title="car" alt="car" />
                                        <span class="background">
                                            <span class="icon-plus"></span>
                                        </span>
                                    </a>
                                </div>
                                <!-- .image -->

                                <!-- content -->
                                <div class="car-content">

                                    <!-- title -->
                                    <div class="car-title">
                                        <h3><a href="#">Great Honda CLR</a> 
                                        </h3>
                                    </div>
                                    <!-- .title -->

                                    <!-- tags -->
                                    <div class="car-tags">
                                        <ul class="clearfix">
                                            <li>2012</li>
                                            <li>200hp</li>
                                            <li>18.000mi</li>
                                            <li>Bensin</li>
                                            <li>Automatic</li>
                                        </ul>
                                    </div>
                                    <!-- .tags -->

                                    <!-- price -->
                                    <div class="car-price">
                                        <a href="#" class="clearfix">
                                            <span class="price">$12.350</span>
                                            <span class="icon-arrow-right2"></span>
                                        </a>
                                    </div>
                                    <!-- .price -->

                                </div>
                                <!-- .content -->

                            </div>
                        </div>
                        <!-- .car -->

                        <!-- car -->
                        <div class="four columns">
                            <div class="car-box vertical medium" data-appear-animation="flipInX">

                                <!-- image -->
                                <div class="car-image">
                                    <a href="#">
                                        <img src="images/car-2.jpg" title="car" alt="car" />
                                        <span class="background">
                                            <span class="icon-plus"></span>
                                        </span>
                                    </a>
                                </div>
                                <!-- .image -->

                                <!-- content -->
                                <div class="car-content">

                                    <!-- title -->
                                    <div class="car-title">
                                        <h3><a href="#">Superb Range Rover</a> 
                                        </h3>
                                    </div>
                                    <!-- .title -->

                                    <!-- tags -->
                                    <div class="car-tags">
                                        <ul class="clearfix">
                                            <li>2012</li>
                                            <li>200hp</li>
                                            <li>18.000mi</li>
                                            <li>Bensin</li>
                                            <li>Automatic</li>
                                        </ul>
                                    </div>
                                    <!-- .tags -->

                                    <!-- price -->
                                    <div class="car-price">
                                        <a href="#" class="clearfix">
                                            <span class="price">$12.350</span>
                                            <span class="icon-arrow-right2"></span>
                                        </a>
                                    </div>
                                    <!-- .price -->

                                </div>
                                <!-- .content -->

                            </div>
                        </div>
                        <!-- .car -->

                        <!-- car -->
                        <div class="four columns">
                            <div class="car-box vertical medium" data-appear-animation="slideInRight">

                                <!-- image -->
                                <div class="car-image">
                                    <a href="#">
                                        <img src="images/car-3.jpg" title="car" alt="car" />
                                        <span class="background">
                                            <span class="icon-plus"></span>
                                        </span>
                                    </a>
                                </div>
                                <!-- .image -->

                                <!-- content -->
                                <div class="car-content">

                                    <!-- title -->
                                    <div class="car-title">
                                        <h3><a href="#">New Wolksvagen Passat</a> 
                                        </h3>
                                    </div>
                                    <!-- .title -->

                                    <!-- tags -->
                                    <div class="car-tags">
                                        <ul class="clearfix">
                                            <li>2012</li>
                                            <li>200hp</li>
                                            <li>18.000mi</li>
                                            <li>Bensin</li>
                                            <li>Automatic</li>
                                        </ul>
                                    </div>
                                    <!-- .tags -->

                                    <!-- price -->
                                    <div class="car-price">
                                        <a href="#" class="clearfix">
                                            <span class="price">$12.350</span>
                                            <span class="icon-arrow-right2"></span>
                                        </a>
                                    </div>
                                    <!-- .price -->

                                </div>
                                <!-- .content -->

                            </div>
                        </div>
                        <!-- .car -->

                    </div>
                    <!-- .1st -->

                    <!-- 2nd -->
                    <div class="row">

                        <!-- car -->
                        <div class="four columns">
                            <div class="car-box vertical medium" data-appear-animation="slideInLeft">

                                <!-- image -->
                                <div class="car-image">
                                    <a href="#">
                                        <img src="images/car-4.jpg" title="car" alt="car" />
                                        <span class="background">
                                            <span class="icon-plus"></span>
                                        </span>
                                    </a>
                                </div>
                                <!-- .image -->

                                <!-- content -->
                                <div class="car-content">

                                    <!-- title -->
                                    <div class="car-title">
                                        <h3><a href="#">Great Honda CLR</a> 
                                        </h3>
                                    </div>
                                    <!-- .title -->

                                    <!-- tags -->
                                    <div class="car-tags">
                                        <ul class="clearfix">
                                            <li>2012</li>
                                            <li>200hp</li>
                                            <li>18.000mi</li>
                                            <li>Bensin</li>
                                            <li>Automatic</li>
                                        </ul>
                                    </div>
                                    <!-- .tags -->

                                    <!-- price -->
                                    <div class="car-price">
                                        <a href="#" class="clearfix">
                                            <span class="price">$12.350</span>
                                            <span class="icon-arrow-right2"></span>
                                        </a>
                                    </div>
                                    <!-- .price -->

                                </div>
                                <!-- .content -->

                            </div>
                        </div>
                        <!-- .car -->

                        <!-- car -->
                        <div class="four columns">
                            <div class="car-box vertical medium" data-appear-animation="flipInX">

                                <!-- image -->
                                <div class="car-image">
                                    <a href="#">
                                        <img src="images/car-5.jpg" title="car" alt="car" />
                                        <span class="background">
                                            <span class="icon-plus"></span>
                                        </span>
                                    </a>
                                </div>
                                <!-- .image -->

                                <!-- content -->
                                <div class="car-content">

                                    <!-- title -->
                                    <div class="car-title">
                                        <h3><a href="#">Superb Range Rover</a> 
                                        </h3>
                                    </div>
                                    <!-- .title -->

                                    <!-- tags -->
                                    <div class="car-tags">
                                        <ul class="clearfix">
                                            <li>2012</li>
                                            <li>200hp</li>
                                            <li>18.000mi</li>
                                            <li>Bensin</li>
                                            <li>Automatic</li>
                                        </ul>
                                    </div>
                                    <!-- .tags -->

                                    <!-- price -->
                                    <div class="car-price">
                                        <a href="#" class="clearfix">
                                            <span class="price">$12.350</span>
                                            <span class="icon-arrow-right2"></span>
                                        </a>
                                    </div>
                                    <!-- .price -->

                                </div>
                                <!-- .content -->

                            </div>
                        </div>
                        <!-- .car -->

                        <!-- car -->
                        <div class="four columns">
                            <div class="car-box vertical medium" data-appear-animation="slideInRight">

                                <!-- image -->
                                <div class="car-image">
                                    <a href="#">
                                        <img src="images/car-6.jpg" title="car" alt="car" />
                                        <span class="background">
                                            <span class="icon-plus"></span>
                                        </span>
                                    </a>
                                </div>
                                <!-- .image -->

                                <!-- content -->
                                <div class="car-content">

                                    <!-- title -->
                                    <div class="car-title">
                                        <h3><a href="#">New Wolksvagen Passat</a> 
                                        </h3>
                                    </div>
                                    <!-- .title -->

                                    <!-- tags -->
                                    <div class="car-tags">
                                        <ul class="clearfix">
                                            <li>2012</li>
                                            <li>200hp</li>
                                            <li>18.000mi</li>
                                            <li>Bensin</li>
                                            <li>Automatic</li>
                                        </ul>
                                    </div>
                                    <!-- .tags -->

                                    <!-- price -->
                                    <div class="car-price">
                                        <a href="#" class="clearfix">
                                            <span class="price">$12.350</span>
                                            <span class="icon-arrow-right2"></span>
                                        </a>
                                    </div>
                                    <!-- .price -->

                                </div>
                                <!-- .content -->

                            </div>
                        </div>
                        <!-- .car -->

                    </div>
                    <!-- .2nd -->

                    <!-- button -->
                    <div class="row">
                        <div class="button-wrap"> <a href="#" class="big button light" data-appear-animation="flipInX">Check our complete offer</a> 
                        </div>
                    </div>
                    <!-- .button -->

                </div>
            </div>
        </div>
    </section>

    <!-- ================================================== END LATEST CARS ================================================== -->


    <!-- ================================================== TOP FOOTER ================================================== -->
    <section>
        <div class="dark-promo">
            <div class="container">
                <div class="row">
                    <div class="promo dark">
                        <h1 data-appear-animation="flipInX">+370 65459518</h1>
                        <h4 data-appear-animation="flipInX">Dariaus ir Girėno g. 134, 72001 Tauragė, Lietuva
                            <br />
                            <b>mvauto777@gmail.com</b></h4>
                        <div class="button-wrap"> <a href="#" class="button dark medium" data-appear-animation="flipInX">Susisiekite su mumis</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================== TOP FOOTER ================================================== -->

    <!-- ================================================== FOOTER WITH WIDGETS ================================================== -->
    <section class="space-top-and-bottom small">
        <div class="footer">
            <div class="container">
                <div class="row">

                    <!-- text widget -->
                    <div class="three columns alpha">
                        <div class="widget" data-appear-animation="slideInLeft">
                            <h4><b>About</b> Carell</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no laboris nisi ut aliquip ex.
                                <br />
                                <br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no laboris nisi ut aliquip ex <a href="#"> Read more &raquo;</a> 
                            </p>
                        </div>
                    </div>
                    <!-- .text widget -->

                    <!-- pick car widget -->
                    <div class="three columns">
                        <div class="widget" data-appear-animation="bounceIn">
                            <h4><b>Pick </b>Car</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                            <div class="light-select-input">
                                <select>
                                    <option selected>By Make</option>
                                    <option>Alpha Romeo</option>
                                    <option>Austin</option>
                                    <option>BMW</option>
                                    <option>Honda</option>
                                    <option>Toyota</option>
                                </select>
                            </div>
                            <div class="light-select-input">
                                <select>
                                    <option selected>By Type</option>
                                    <option>Alpha Romeo</option>
                                    <option>Austin</option>
                                    <option>BMW</option>
                                    <option>Honda</option>
                                    <option>Toyota</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- .pick car widget -->

                </div>
            </div>
        </div>
    </section>

    <!-- ================================================== FOOTER WITH WIDGETS ================================================== -->

    <!-- ================================================== BOTTOM FOOTER ================================================== -->
    <footer>
        <div class="bottom-footer clearfix;">
            <div class="container">
                <div class="row">
                    <div class="six columns">
                        <div class="copyrights">
                            <p>&copy; MVauto 2004m</p>
                        </div>
                    </div>
                    <div class="six columns">
                        <div class="footer-navigation">
                            <ul class="clearfix">
                                <li><a href="#" class="active">Home</a> 
                                </li>
                                <li><a href="#">About</a> 
                                </li>
                                <li><a href="#">Services</a> 
                                </li>
                                <li><a href="#">Contact</a> 
                                </li>
                                <li><a href="#">Terms &amp; Conditions</a> 
                                </li>
                                <li><a href="#">Privacy Policy</a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================================================== BOTTOM FOOTER ================================================== -->

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
