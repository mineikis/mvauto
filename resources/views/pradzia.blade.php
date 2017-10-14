@extends('layouts.master')

@section('content')

<!-- ================================================== SLIDER ================================================== -->
<section>

    <div class="bannercontainer">
        <div class="banner">
            <ul>
                @foreach ($nuotraukosTitulinio as $nuotrauka)
                <li data-transition="fade" data-slotamount="1">
                    <img src="{{ URL::asset('images/'.$brangiausiasAuto->id.'/'.$nuotrauka) }}" alt="" title="" />
                    <!-- caption -->
                    <div class="slide-caption caption lft" data-y="300" data-speed="700" data-start="400" data-easing="easeOutBack"></div>
                    <!-- .caption -->

                    <!-- title -->
                    <div class="caption-title caption" data-y="320" data-speed="700" data-start="1200" data-easing="easeOutBack">
                        <h2>{{$brangiausiasAuto->modelis->marke->pavadinimas}} <b>{{$brangiausiasAuto->modelis->pavadinimas}} {{$brangiausiasAuto->modelis->kita}}</b> 
                        </h2>
                    </div>
                    <!-- title -->

                    <!-- tags -->
                    <div class="caption-tags caption" data-y="400" data-speed="700" data-start="1800" data-easing="easeOutBack">
                        <ul class="tag clearfix">
                            <li>{{ Carbon\Carbon::parse($brangiausiasAuto->pirmos_reg_data)->year}}</li>
                            <li>{{explode('(', $brangiausiasAuto->variklis)[0]}}</li>
                            <li>{{\App\Helpers\LanguageHelper::kuroTipas($brangiausiasAuto)}}</li>
                            <li>{{\App\Helpers\LanguageHelper::pavaruDeze($brangiausiasAuto)}}</li>
                            <li class="tag-price">
                                <a href="automobilis/{{$brangiausiasAuto->id}}" class="clearfix">
                                    <span class="price"><b>{{$brangiausiasAuto->kaina}} €</b> 
                                    </span>
                                    <span class="icon-arrow-right2"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .tags -->

                </li>
                @endforeach
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
                    <h1 data-appear-animation="slideInLeft"><b>@lang('labels.sveiki_atvyke')</b> 
                    </h1>
                    <p data-appear-animation="slideInRight">@lang('tekstai.sveiki_atvyke_1')
                        <br />@lang('tekstai.sveiki_atvyke_2')</p>
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
                        <h2>@lang('labels.naujausi') <b>@lang('labels.skelbimai')</b> 
                        </h2>
                        <span></span>
                    </div>
                    @foreach ($naujausi->chunk(3) as $chunk)
                    <div class="row">
                        @foreach($chunk as $auto)
                        <!-- car -->
                        <div class="four columns">
                            <div class="car-box vertical medium" data-appear-animation="bounceIn">

                                <!-- image -->
                                <div class="car-image">
                                    <a href="automobilis/{{$auto->id}}">
                                        <img src="{{ URL::asset('images/'.$auto->id.'/1.jpg') }}" title="car" alt="car" />
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
                                        <h3><a href="automobilis/{{$auto->id}}">{{$auto->modelis->marke->pavadinimas}} {{$auto->modelis->pavadinimas}}</a> 
                                        </h3>
                                    </div>
                                    <!-- .title -->

                                    <!-- tags -->
                                    <div class="car-tags">
                                        <ul class="clearfix">
                                            <li>{{ Carbon\Carbon::parse($auto->pirmos_reg_data)->year}}</li>
                                            <li>{{explode('(', $auto->variklis)[0]}}</li>
                                            <li>{{\App\Helpers\LanguageHelper::kuroTipas($auto)}}</li>
                                            <li>{{\App\Helpers\LanguageHelper::pavaruDeze($auto)}}</li>
                                            @if(!empty ($auto->rida))
                                            <li>{{$auto->rida}}@lang('labels.km')</li>
                                            @endif
                                        </ul>
                                    </div>
                                    <!-- .tags -->

                                    <!-- price -->
                                    <div class="car-price">
                                        <a href="automobilis/{{$auto->id}}" class="clearfix">
                                            <span class="price">{{$auto->kaina}} €</span>
                                            <span class="icon-arrow-right2"></span>
                                        </a>
                                    </div>
                                    <!-- .price -->

                                </div>
                                <!-- .content -->

                            </div>
                        </div>
                        <!-- .car -->
                        
                        @endforeach
                    </div>
                    <!-- .1st -->

                    @endforeach

                    <!-- button -->
                    <div class="row">
                        <div class="button-wrap"> <a href="automobiliai/1" class="big button light" data-appear-animation="flipInX">@lang('labels.visi_skelbimai')</a>
                        </div>
                    </div>
                    <!-- .button -->

                </div>
            </div>
        </div>
    </section>
@section('subfooter')
@include('subfooter')
@show
    <!-- ================================================== END LATEST CARS ================================================== -->
    @stop