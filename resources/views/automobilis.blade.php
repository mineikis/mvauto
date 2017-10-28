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
                        <!-- car title -->
                        <div class="single-car-title">
                            <h3>{{$automobilis->modelis->marke->pavadinimas}} {{$automobilis->modelis->pavadinimas}} @if(!empty ($automobilis->modelis->kita))"{{$automobilis->modelis->kita}}"@endif</h3>
                        </div>
                        <!-- .car title -->

                    </div>


                    <!-- car price -->
                    <div class="two columns" data-appear-animation="slideInRight">
                        <div class="single-car-price">
                            <a href="#" class="button light medium"><b>{{$automobilis->kaina}} €</b> </a>
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
                                    @foreach($nuotraukos as $nuotrauka)
                                    <li data-transition="fade" data-slotamount="1">
                                        <img src="{{ URL::asset('images/'.$automobilis->id.'/'.$nuotrauka) }}" alt="" title="" />
                                    </li>
                                    @endforeach
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
                                        <p>{{$isLocaleLt ? $automobilis->komentaras_lt : $automobilis->komentaras_ru}}</p>

                                        <p><b>Cia galima irasyti komentarus ir kita info pvz: Privalumai </b>
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
                                                    <li>@lang('labels.marke'):
                                                        <span> <b>{{$automobilis->modelis->marke->pavadinimas}}</b> 
                                                        </span>
                                                    </li>
                                                    <li>@lang('labels.modelis'):
                                                        <span> <b>{{$automobilis->modelis->pavadinimas}}</b> 
                                                        </span>
                                                    </li>
                                                    <li>@lang('labels.kaina'):
                                                        <span> <b>{{ Carbon::parse($automobilis->pirmos_reg_data)->year}}-{{ Carbon::parse($automobilis->pirmos_reg_data)->month}}</b> 
                                                        </span>
                                                    </li>
                                                    <li>@lang('labels.rida'):
                                                        <span> <b>{{ $automobilis->rida}}@lang('labels.km')</b> 
                                                        </span>
                                                    </li>
                                                    <li>@lang('labels.kebulas'):
                                                        <span> <b>{{$isLocaleLt ? $automobilis->kebulo_tipas->pavadinimas_lt : $automobilis->kebulo_tipas->pavadinimas_ru}}</b>
                                                        </span>
                                                    </li>
                                                    <li>@lang('labels.spalva'):
                                                        <span> <b>{{$isLocaleLt ? $automobilis->spalva->pavadinimas_lt : $automobilis->spalva->pavadinimas_ru}} {{$isLocaleLt ? $automobilis->spalva->kita_lt : $automobilis->spalva->kita_ru}}</b> 
                                                        </span>
                                                    </li>
                                                    <li>@lang('labels.variklis'):
                                                        <span> <b>{{$automobilis->variklis}}</b> 
                                                        </span>
                                                    </li>
                                                    <li>@lang('labels.transmisija'):
                                                        <span> <b>{{$isLocaleLt ? $automobilis->pavaru_deze->pavadinimas_lt : $automobilis->pavaru_deze->pavadinimas_ru}}</b> 
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
                                                    <li>Lietaus daviklis?
                                                        <span> <b></b> 
                                                        </span>
                                                    </li>
                                                    <li>oro pagalves?
                                                        <span> <b>12</b> 
                                                        </span>
                                                    </li>
                                                    <li>Sound System:
                                                        <span> <b>Elevate</b> 
                                                        </span>
                                                    </li>
                                                    <li>Ratlankiai:
                                                        <span> <b>Alu 18&quot;</b> 
                                                        </span>
                                                    </li>
                                                    <li>Kondicionierius
                                                        <span> <b></b> 
                                                        </span>
                                                    </li>
                                                    <li>Cruise Control
                                                        <span> <b></b> 
                                                        </span>
                                                    </li>
                                                    <li>Durys:
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


                            <!-- inline promo -->
                            <div class="four columns" data-appear-animation="slideInRight">
                                <div class="inline-promo">

                                    <!-- promo heading -->
                                    <div class="inline-promo-heading">
                                        <p>@lang('labels.papildoma_info')</p>
                                    </div>

                                    <div class="inline-promo-content">
                                        <p>{{$isLocaleLt ? $automobilis->komentaras_lt : $automobilis->komentaras_ru}}</p>

                                        <p><b>Cia galima irasyti komentarus ir kita info pvz: Privalumai </b>
                                        </p>

                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et sit voluptatem accusantium doloremque sit voluptatem accusantium doloremque.</p>
                                    </div>
                                    <!-- .promo heading -->

                                </div>
                            </div>
                            <!-- .inline promo -->
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

                    @foreach($reklama as $auto)
                    <!-- car vertical medium -->
                    <div class="four columns">
                        <div class="car-box vertical medium" data-appear-animation="bounceIn">

                            <!-- image -->
                            <div class="car-image">
                                <a href="/automobilis/{{$auto->id}}">
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
                                    <h3><a href="/automobilis/{{$auto->id}}">{{$auto->modelis->marke->pavadinimas}} {{$auto->modelis->pavadinimas}}</a>
                                    </h3>
                                </div>
                                <!-- .title -->

                                <!-- tags -->
                                <div class="car-tags">
                                    <ul class="clearfix">
                                        <li>{{ Carbon::parse($auto->pirmos_reg_data)->year}}</li>
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
                                    <a href="/automobilis/{{$auto->id}}" class="clearfix">
                                        <span class="price">{{$auto->kaina}} €</span>
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                </div>
                                <!-- .price -->

                            </div>
                            <!-- .content -->

                        </div>
                    </div>
                    <!-- .car vertical medium -->
                    @endforeach

                </div>
                <!-- .1 -->

            </div>
        </div>
    </section>

    <!-- ================================================== LATEST CARS ============================================== -->
    @stop