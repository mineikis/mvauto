
@extends('layouts.master')

@section('content')
<!-- ================================================== TESTIMONIALS ================================================== -->

<section>
    <div class="map" data-appear-animation="bounceIn">

    </div>



</section>
<!-- ================================================== END TESTIMONIALS ================================================== -->

<!-- ================================================== BY OR RESERVE =========================================== -->
<section>

    <div class="dark-promo space-bottom">
        <div class="container">
            <div class="row">

                <div class="promo">

                    <div class="dark-form">
                        <h3><b>@lang('labels.susisiekite_su_mumis')</b>
                        </h3>
                        <h4>@lang('tekstai.susisiekite_su_mumis')</h4>
                        <div class="send_result"></div>
                        <form class="contactform" method="post" action="contact_process.php">
                            <fieldset>
                                <div class="three columns alpha">

                                    <div class="input">
                                        <input type="text" placeholder="@lang('labels.vardas')" name="name"/>
                                    </div>

                                    <div class="input">
                                        <input type="text" placeholder="@lang('labels.el_pastas')" name="email" />
                                    </div>
                                    <div class="input">
                                        <input type="text" placeholder="@lang('labels.telefonas')" name="phonenumber"/>
                                    </div>
                                </div>
                                <div class="six columns">
                                    <div class="textarea">
                                        <textarea placeholder="@lang('labels.zinute')" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="three columns">
                                    <div class="input-submit">
                                        <input type="submit" value="@lang('labels.siusti')" class="submitform" />
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

</section>

<!-- ================================================== dark OR RESERVE ============================================= -->

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

@stop