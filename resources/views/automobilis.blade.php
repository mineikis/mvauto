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
                                <div class="four columns alpha" data-appear-animation="slideInLeft">
                                    <div class="accordion">
                                        <ul class="resp-tabs-list clearfix">
                                            <li>@lang('labels.elektronika')</li>
                                            <li>@lang('labels.apsauga')</li>
                                            <li>@lang('labels.saugumas')</li>
                                            <li>@lang('labels.salonas')</li>
                                            <li>@lang('labels.ekterjeras')</li>
                                            <li>@lang('labels.audio_video')</li>
                                            <li>@lang('labels.tiuningas')</li>
                                            <li>@lang('labels.kiti_ypatumai')</li>
                                        </ul>
                                        <div class="resp-tabs-container">
                                            <div class="tab-content">
                                                @foreach($automobilis->priv_elektronika as $elektronika)
                                                <li>{{\App\Helpers\LanguageHelper::gautiLokalizuota('priv_elektronika', $elektronika)}}</li>
                                                @endforeach
                                            </div>
                                            <div class="tab-content">
                                                @foreach($automobilis->priv_apsauga as $apsauga)
                                                <li>{{\App\Helpers\LanguageHelper::gautiLokalizuota('priv_apsauga', $apsauga)}}</li>
                                                @endforeach
                                            </div>
                                            <div class="tab-content">
                                                @foreach($automobilis->priv_saugumas as $saugumas)
                                                <li>{{\App\Helpers\LanguageHelper::gautiLokalizuota('priv_saugumas', $saugumas)}}</li>
                                                @endforeach
                                            </div>                                        
                                            <div class="tab-content">
                                                @foreach($automobilis->priv_salonas as $salonas)
                                                <li>{{\App\Helpers\LanguageHelper::gautiLokalizuota('priv_salonas', $salonas)}}</li>
                                                @endforeach
                                            </div>                                        
                                            <div class="tab-content">
                                                @foreach($automobilis->priv_eksterjeras as $eksterjeras)
                                                <li>{{\App\Helpers\LanguageHelper::gautiLokalizuota('priv_eksterjeras', $eksterjeras)}}</li>
                                                @endforeach
                                            </div>
                                            <div class="tab-content">
                                                @foreach($automobilis->priv_av as $av)
                                                <li>{{\App\Helpers\LanguageHelper::gautiLokalizuota('priv_av', $av)}}</li>
                                                @endforeach
                                            </div>
                                            <div class="tab-content">
                                                @foreach($automobilis->priv_tiuningas as $tiuningas)
                                                <li>{{\App\Helpers\LanguageHelper::gautiLokalizuota('priv_tiuningas', $tiuningas)}}</li>
                                                @endforeach
                                            </div>
                                            <div class="tab-content">
                                                @foreach($automobilis->priv_kita as $kita)
                                                <li>{{\App\Helpers\LanguageHelper::gautiLokalizuota('priv_kita', $kita)}}</li>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- horizontal tab -->
                                <div class="four columns" data-appear-animation="bounceIn">
                                    <div class="horizontal-tab clearfix">
                                        <div class="h-tab">
                                            <ul class="resp-tabs-list clearfix">
                                                <li>@lang('labels.detales')</li>
                                                <li>@lang('labels.daugiau')</li>
                                            </ul>
                                            <div class="resp-tabs-container">
                                                <div>
                                                    <ul class="tab-list">
                                                    <li>@lang('labels.kaina'):
                                                            <span> <b>{{$automobilis->kaina}} €</b> 
                                                            </span>
                                                        </li>
                                                        <li>@lang('labels.marke'):
                                                            <span> <b>{{$automobilis->modelis->marke->pavadinimas}}</b> 
                                                            </span>
                                                        </li>
                                                        <li>@lang('labels.modelis'):
                                                            <span> <b>{{$automobilis->modelis->pavadinimas}}</b> 
                                                            </span>
                                                        </li>
                                                        <li>@lang('labels.pag_data'):
                                                            <span> <b>{{ Carbon::parse($automobilis->pirmos_reg_data)->year}}-{{ Carbon::parse($automobilis->pirmos_reg_data)->month}}</b> 
                                                            </span>
                                                        </li>
                                                        <li>@lang('labels.variklis'):
                                                            <span> <b>{{$automobilis->darbinis_turis}} cm³, {{number_format($arklioGalia, 0)}} @lang('labels.ag') ({{$automobilis->galia_kw}} kW)</b> 
                                                            </span>
                                                        </li>
                                                        @if(!empty ($automobilis->rida))
                                                        <li>@lang('labels.rida'):
                                                            <span> <b>{{ $automobilis->rida}}@lang('labels.km')</b> 
                                                            </span>
                                                        </li>
                                                        @endif
                                                        <li>@lang('labels.kuro_tipas'):
                                                            <span> <b>{{\App\Helpers\LanguageHelper::kuroTipas($automobilis)}}</b>
                                                            </span>
                                                        </li>
                                                        <li>@lang('labels.kebulas'):
                                                            <span> <b>{{\App\Helpers\LanguageHelper::kebuloTipas($automobilis)}}</b>
                                                            </span>
                                                        </li>
                                                        <li>@lang('labels.spalva'):
                                                            <span> <b>{{\App\Helpers\LanguageHelper::spalva($automobilis)}}</b> 
                                                            </span>
                                                        </li>
                                                        <li>@lang('labels.varantieji_ratai'):
                                                            <span> <b>{{\App\Helpers\LanguageHelper::varantiejiRatai($automobilis)}}</b> 
                                                            </span>
                                                        </li>
                                                        <li>@lang('labels.pavaru_deze'):
                                                            <span> <b>{{\App\Helpers\LanguageHelper::pavaruDeze($automobilis)}}</b> 
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div>
                                                    <ul class="tab-list">
                                                        @if(!empty ($automobilis->standartas))
                                                        <li>@lang('labels.euro_standartas'):
                                                            <span> <b>{{ $automobilis->standartas}}</b> 
                                                            </span>
                                                        </li>
                                                        @endif
                                                        @if(!empty ($automobilis->ratlankiai))
                                                        <li>@lang('labels.ratlankiai'):
                                                            <span> <b>{{ $automobilis->ratlankiai}}</b> 
                                                            </span>
                                                        </li>
                                                        @endif
                                                        @if(!empty ($automobilis->klimato_valdymas_id))
                                                        <li>@lang('labels.klimato_valdymas'):
                                                            <span> <b>{{\App\Helpers\LanguageHelper::klimatoValdymas($automobilis)}}</b> 
                                                            </span>
                                                        </li>
                                                        @endif
                                                        @if(!empty ($automobilis->pirmos_reg_salis_id))
                                                        <li>@lang('labels.pirmos_reg_salis'):
                                                            <span> <b>{{\App\Helpers\LanguageHelper::pirmosRegSalis($automobilis)}}</b> 
                                                            </span>
                                                        </li>
                                                        @endif
                                                        @if(!empty ($automobilis->kebulo_nr))
                                                        <li>@lang('labels.kebulo_nr'):
                                                            <span> <b>{{$automobilis->kebulo_nr}}</b> 
                                                            </span>
                                                        </li>
                                                        @endif
                                                        @if(!empty ($automobilis->kuro_san_mieste))
                                                        <li>@lang('labels.kuro_san_mieste'):
                                                            <span> <b>{{$automobilis->kuro_san_mieste}}</b> 
                                                            </span>
                                                        </li>
                                                        @endif
                                                        @if(!empty ($automobilis->kuro_san_uzmiestyje))
                                                        <li>@lang('labels.kuro_san_uzmiestyje'):
                                                            <span> <b>{{$automobilis->kuro_san_uzmiestyje}}</b> 
                                                            </span>
                                                        </li>
                                                        @endif
                                                        @if(!empty ($automobilis->kuro_san_bendrai))
                                                        <li>@lang('labels.kuro_san_bendrai'):
                                                            <span> <b>{{$automobilis->kuro_san_bendrai}}</b> 
                                                            </span>
                                                        </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns" data-appear-animation="slideInRight">
                                    <div class="inline-promo">
                                        <div class="inline-promo-heading">
                                            <p>@lang('labels.papildoma_info')</p>
                                        </div>
                                        <div class="inline-promo-content">
                                            <p>{{\App\Helpers\LanguageHelper::komentaras($automobilis)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                            <li>{{number_format($auto->darbinis_turis / 1000, 1)}}L</li>
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