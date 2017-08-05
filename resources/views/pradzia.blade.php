@extends('layouts.master')

@section('content')
    <!-- ================================================== SLIDER ================================================== -->
    <section>
        <div class="bannercontainer">
            <div class="banner">
                <ul>
                    <li data-transition="fade" data-slotamount="1">
                        <img src="{{ URL::asset('images/1/1.jpg') }}" alt="" title="" />
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
                    <li data-transition="fade" data-slotamount="1">
                        <img src="{{ URL::asset('images/1/2.jpg') }}" alt="" title="" />

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
@stop