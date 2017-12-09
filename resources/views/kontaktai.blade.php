
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

                <div class="promo zinute">

                    <div class="dark-form pranesimas">
                        <h3><b>@lang('labels.susisiekite_su_mumis')</b>
                        </h3>
                        <h4>@lang('tekstai.susisiekite_su_mumis')</h4>
                        <div class="send_result"></div>
                        {!! Form::open() !!}
                            <fieldset>
                                <div class="three columns alpha">

                                    <div class="input">
                                        <input type="text" placeholder="@lang('labels.vardas')" name="name"/>
                                    </div>

                                    <div class="input">
                                        <input type="text" placeholder="@lang('labels.el_pastas')" name="email"/>
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
                                    {!! Form::submit(Lang::get('labels.siusti'))!!}
                                    </div>
                                </div>

                            </fieldset>
                        {!! Form::close() !!}
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
                            <a href="/automobilis/{{$auto->id}}" style="height:unset">
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

        </div>
    </div>
</section>
@section('subfooter')
@include('subfooter')
@show
@stop

<script type="text/javascript" src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
<script>
    $(document).ready(function(){
    $('form').submit(function( event ) {
    event.preventDefault();

    var el = $(this);
    $.ajax({
        url: '/send',
        type: 'post',
        data: $('form').serialize(),
        dataType: 'json',
        success: function( _response ){
            $('.pranesimas').remove();
            $( ".zinute" ).append( $("<h1 style='color:white;'>@lang('labels.sent_success')</h1>"));
        },
        error: function( _response ){
            $( ".zinute" ).append( $("<h1 style='color:white;'>@lang('labels.sent_fail')</h1>"));
        }
    });
});
});
</script>