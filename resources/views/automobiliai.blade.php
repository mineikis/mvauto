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
                            <h3><a href="#">{{$auto->modelis->marke->pavadinimas}} {{$auto->modelis->pavadinimas}}</a>
                            </h3>
                        </div>
                        <!-- .title -->

                        <!-- tags -->
                        <div class="car-tags">
                            <ul class="clearfix">
                                <li>{{ Carbon\Carbon::parse($auto->pirmos_reg_data)->year}}</li>
                                <li>{{explode('(', $auto->variklis)[0]}}</li>
                                <li>{{$isLocaleLt ? $auto->kuro_tipas->pavadinimas_lt : $auto->kuro_tipas->pavadinimas_ru}}</li>
                                <li>{{$isLocaleLt ? $auto->pavaru_deze->pavadinimas_lt : $auto->pavaru_deze->pavadinimas_ru}}</li>
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
        @endforeach

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