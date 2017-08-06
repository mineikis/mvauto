@extends('layouts.master')

@section('content')

  @section('search')
  @include('search')
  @show
   
    <!-- ================================================== PAGINATION ================================================== -->

    <section>
        <div class="container">
            <div class="row">

                <div class="pagination clearfix">
                    <!-- <h3>Current listing gives <b>1.234</b> cars in <b>12</b> pages</h3> -->

                    <!-- pagination & sort by -->
                    <div class="ten columns alpha">
                        <ul class="pagination-list clearfix">
                            <li><a href="#">&laquo; @lang('labels.buves')</a>
                            </li>
                            <li><a href="#" class="active">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">9</a>
                            </li>
                            <li><a href="#">10</a>
                            </li>
                            <li><a href="#">11</a>
                            </li>
                            <li><a href="#">12</a>
                            </li>
                            <li><a href="#">@lang('labels.kitas') &raquo;</a>
                            </li>
                        </ul>
                    </div>

                    <!-- sort by -->
                    <div class="two columns" data-appear-animation "slideInRight">
                        <div class="light-select-input sort-by">
                            <select>
                                <option value="" selected="selected">@lang('labels.rusiuoti_pagal')</option>
                                <option value="">Price ASC</option>
                                <option value="">Price DSC</option>
                                <option value="">Date ASC</option>
                                <option value="">Date DSC</option>
                            </select>
                        </div>
                    </div>
                    <!-- .sort by -->

                </div>

            </div>

            <!-- .1 -->
            <div class="row">

                <!-- car vertical medium -->
                <div class="four columns">
                    <div class="car-box vertical medium">

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
                    <div class="car-box vertical medium">

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
                    <div class="car-box vertical medium">

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

            <!-- .2 -->
            <div class="row">

                <!-- car vertical medium -->
                <div class="four columns">
                    <div class="car-box vertical medium">

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
                <!-- .car vertical medium -->

                <!-- car vertical medium -->
                <div class="four columns">
                    <div class="car-box vertical medium">

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
                    <div class="car-box vertical medium">

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
            <!-- .2 -->

            <!-- .3 -->
            <div class="row">

                <!-- car vertical medium -->
                <div class="four columns">
                    <div class="car-box vertical medium">

                        <!-- image -->
                        <div class="car-image">
                            <a href="#">
                                <img src="images/car-7.jpg" title="car" alt="car" />
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
                    <div class="car-box vertical medium">

                        <!-- image -->
                        <div class="car-image">
                            <a href="#">
                                <img src="images/car-8.jpg" title="car" alt="car" />
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
                    <div class="car-box vertical medium">

                        <!-- image -->
                        <div class="car-image">
                            <a href="#">
                                <img src="images/car-9.jpg" title="car" alt="car" />
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
            <!-- .3 -->

            <div class="row">
                <div class="pagination">
                    <ul class="pagination-list clearfix">
                        <li><a href="#">&laquo; @lang('labels.buves')</a>
                        </li>
                        <li><a href="#" class="active">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">9</a>
                        </li>
                        <li><a href="#">10</a>
                        </li>
                        <li><a href="#">11</a>
                        </li>
                        <li><a href="#">12</a>
                        </li>
                        <li><a href="#">@lang('labels.kitas') &raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        </div>
        </div>
    </section>

    <!-- ================================================== END PAGINATION ============================================== -->
@stop