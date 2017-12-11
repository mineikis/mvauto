@extends('layouts.master')

@section('content')

@section('search')
@include('search')
@show

<!-- ================================================== PAGINATION ================================================== -->

<section>
    <div class="container">
        <div class="row">

            <div class="pagination clearfix" style="margin:unset;">
                <!-- pagination & sort by -->
                <div class="ten columns alpha">
                    <ul class="pagination-list clearfix">
                        @if($next > -1)
                        <li><a href="/automobiliai/{{$prev}}">&laquo; @lang('labels.buves')</a>
                        </li>
                        @for ($i = 1; $i <= $pageCount; $i++)
                        <li><a href="/automobiliai/{{$i}}" class="{{ Request::is(LaravelLocalization::getCurrentLocale().'/automobiliai/'.$i) ? 'active' : ''}}">{{$i}}</a>
                        </li>
                        @endfor
                        <li><a  href="/automobiliai/{{$next}}">@lang('labels.kitas') &raquo;</a>
                        </li>
                        @endif
                    </ul>
                </div>

                <!-- sort by -->
                <div class="two columns" data-appear-animation "slideInRight">
                    <div class="light-select-input sort-by">
                        <select name="forma" onchange="location = this.value;">
                            <option value="" selected="selected">@lang('labels.rusiuoti_pagal')</option>
                            <option value="\automobiliai\rusiuoti\1">@lang('labels.rusiuoti_kaina_desc')</option>
                            <option value="\automobiliai\rusiuoti\2">@lang('labels.rusiuoti_kaina_asc')</option>
                            <option value="\automobiliai\rusiuoti\3">@lang('labels.rusiuoti_data_desc')</option>
                            <option value="\automobiliai\rusiuoti\4">@lang('labels.rusiuoti_data_asc')</option>
                        </select>
                    </div>
                </div>
                <!-- .sort by -->

            </div>

        </div>
        @foreach ($automobiliai->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $auto)
            <!-- car vertical medium -->
            <div class="four columns">
                <div class="car-box vertical medium">

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
                                <li>{{ Carbon\Carbon::parse($auto->pirmos_reg_data)->year}}</li>
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
                                <span class="price">{{$auto->kaina}} € @if($auto->pvm) + @lang('labels.pvm')@endif</span>
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
        @endforeach

    </div>
    <!-- .3 -->

    <div class="row">
        <div class="pagination" style="margin:unset;">
            <ul class="pagination-list clearfix">
                @if($next > -1)
                <li><a href="/automobiliai/{{$prev}}">&laquo; @lang('labels.buves')</a>
                </li>
                @for ($i = 1; $i <= $pageCount; $i++)
                <li><a href="/automobiliai/{{$i}}" class="{{ Request::is(LaravelLocalization::getCurrentLocale().'/automobiliai/'.$i) ? 'active' : ''}}">{{$i}}</a>
                </li>
                @endfor
                <li><a  href="/automobiliai/{{$next}}">@lang('labels.kitas') &raquo;</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>


</div>
</div>
</section>
@section('subfooter')
@include('subfooter')
@show
<!-- ================================================== END PAGINATION ============================================== -->
@stop