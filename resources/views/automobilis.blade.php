 <?php use carbon\carbon;?>

@extends('layouts.master')

@section('content')


  @section('search')
  @include('search')
  @show


    <!-- ================================================== CAR SINGLE ================================================== -->

    <section class="space-top-and-bottom medium">
        <div class="container">
            <div class="row">

                <!-- car single header -->
                <div class="car-single-header clearfix">

                    <div class="ten columns alpha" data-appear-animation="slideInLeft">

                        <!-- date added -->
                        <div class="single-car-date-added">
                            <p>
                                <span class="icon-calendar"></span>{{ Carbon::now() }}</p>
                        </div>
                        <!-- date added -->

                        <!-- car title -->
                        <div class="single-car-title">
                            <h3>Superb Condition Mercedes Benz SLK</h3>
                        </div>
                        <!-- .car title -->

                    </div>


                    <!-- car price -->
                    <div class="two columns" data-appear-animation="slideInRight">
                        <div class="single-car-price">
                            <a href="#" class="button light medium"><b>$14.350</b> </a>
                        </div>
                    </div>
                    <!-- .car price -->

                </div>
                <!-- .car single header -->


                <!-- car single body -->
                <div class="car-single-body clearfix" data-appear-animation="slideInLeft">

                    <!-- car single media -->
                    <div class="twelve columns alpha">

                        <div class="bannercontainer">
                            <div class="banner-single">

                                <ul>

                                    <li data-transition="fade" data-slotamount="1">

                                        <img src="{{ URL::asset('images/1/1.jpg') }}" alt="" title="" />

                                    </li>

                                    <li data-transition="fade" data-slotamount="1">

                                        <img src="{{ URL::asset('images/1/2.jpg') }}" alt="" title="" />

                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- .car single media -->

                    <!-- car single info -->
                    <div class="twelve columns alpha">

                        <div class="car-single-one space-top-and-bottom small">


                            <!-- inline promo -->
                            <div class="four columns alpha" data-appear-animation="slideInLeft">
                                <div class="inline-promo">

                                    <!-- promo heading -->
                                    <div class="inline-promo-heading">
                                        <p>@lang('labels.papildoma_info')</p>
                                    </div>

                                    <div class="inline-promo-content">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                                        <p><b>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</b>
                                        </p>

                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et sit voluptatem accusantium doloremque sit voluptatem accusantium doloremque.</p>
                                    </div>
                                    <!-- .promo heading -->

                                </div>
                            </div>
                            <!-- .inline promo -->

                            <!-- horizontal tab -->
                            <div class="four columns" data-appear-animation="bounceIn">
                                <div class="horizontal-tab clearfix">
                                    <div class="h-tab">
                                        <ul class="resp-tabs-list clearfix">
                                            <li>@lang('labels.detales')</li>
                                            <li>@lang('labels.iranga')</li>
                                        </ul>

                                        <div class="resp-tabs-container">

                                            <div>
                                                <ul class="tab-list">
                                                    <li>Make:
                                                        <span> <b>Mercedes</b> 
                                                        </span>
                                                    </li>
                                                    <li>Model:
                                                        <span> <b>CLK</b> 
                                                        </span>
                                                    </li>
                                                    <li>Year:
                                                        <span> <b>2012</b> 
                                                        </span>
                                                    </li>
                                                    <li>Mileage:
                                                        <span> <b>96, 828mi</b> 
                                                        </span>
                                                    </li>
                                                    <li>Body:
                                                        <span> <b>Coupe</b> 
                                                        </span>
                                                    </li>
                                                    <li>Ext. Color:
                                                        <span> <b>White</b> 
                                                        </span>
                                                    </li>
                                                    <li>Int. Color:
                                                        <span> <b>Black Ebony</b> 
                                                        </span>
                                                    </li>
                                                    <li>Engine:
                                                        <span> <b>12 Cylinder</b> 
                                                        </span>
                                                    </li>
                                                    <li>Transmision:
                                                        <span> <b>Manual</b> 
                                                        </span>
                                                    </li>
                                                    <li>Drive Type:
                                                        <span> <b>RWD</b> 
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div>
                                                <ul class="tab-list">
                                                    <li>ABS
                                                        <span> <b></b> 
                                                        </span>
                                                    </li>
                                                    <li>ESP
                                                        <span> <b></b> 
                                                        </span>
                                                    </li>
                                                    <li>Rain Sensors
                                                        <span> <b></b> 
                                                        </span>
                                                    </li>
                                                    <li>Airbags:
                                                        <span> <b>12</b> 
                                                        </span>
                                                    </li>
                                                    <li>Sound System:
                                                        <span> <b>Elevate</b> 
                                                        </span>
                                                    </li>
                                                    <li>Rims:
                                                        <span> <b>Alu 18&quot;</b> 
                                                        </span>
                                                    </li>
                                                    <li>Air Condition
                                                        <span> <b></b> 
                                                        </span>
                                                    </li>
                                                    <li>Cruise Control
                                                        <span> <b></b> 
                                                        </span>
                                                    </li>
                                                    <li>Child lock:
                                                        <span> <b></b> 
                                                        </span>
                                                    </li>
                                                    <li>Doors:
                                                        <span> <b>5</b> 
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- .horizontal tab -->

                            <!-- loan calculator -->
                            <div class="four columns" data-appear-animation="slideInRight">
                                <div class="inline-promo">

                                    <!-- promo heading -->
                                    <div class="inline-promo-heading">
                                        <p>LOAN CALCULATOR</p>
                                    </div>

                                    <div class="inline-promo-content">
                                        <form>
                                            <fieldset>
                                                <div class="input">
                                                    <input type="text" placeholder="$00.00 (loan amount)" />
                                                </div>
                                                <div class="input">
                                                    <input type="text" placeholder="$00.00 (down payment)" />
                                                </div>
                                                <div class="input">
                                                    <input type="text" placeholder="00.00% (loan rate)" />
                                                </div>
                                                <div class="input">
                                                    <input type="text" placeholder="0 Months (loan period)" />
                                                </div>
                                            </fieldset>
                                        </form>
                                        <a href="#" class="button orange">Calculate</a>
                                        <br />
                                        <br />
                                    </div>
                                    <!-- .promo heading -->

                                </div>
                            </div>
                            <!-- .loan calculator -->


                        </div>

                    </div>
                    <!-- .car single info -->

                </div>
                <!--. car single body -->

            </div>
        </div>
    </section>

    <!-- ================================================== CAR SINGLE ============================================== -->



    <!-- ================================================== LATEST CARS ================================================== -->

    <section class="space-top-and-bottom medium">
        <div class="container">
            <div class="row">

                <!-- .1 -->
                <div class="row">

                    <!-- car vertical medium -->
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
                    <!-- .car vertical medium -->

                    <!-- car vertical medium -->
                    <div class="four columns">
                        <div class="car-box vertical medium" data-appear-animation="bounceIn">

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
                    <!-- .car vertical medium -->


                    <!-- car vertical medium -->
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
                    <!-- .car vertical medium -->

                </div>
                <!-- .1 -->

            </div>
        </div>
    </section>

    <!-- ================================================== LATEST CARS ============================================== -->
@stop