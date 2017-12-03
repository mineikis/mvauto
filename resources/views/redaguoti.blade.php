@extends('layouts.master')
@section('content')
@section('styles')
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/dropzone.css') }}">
@stop
@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js') }}"></script>
@stop
<section class="space-top-and-bottom medium">
    <div class="container">
    {!! Form::model($auto, array('route' => array('auto.update', $auto->id), 'method' => 'PUT')) !!}
    <!-- modelis, marke, pagaminimo metai ir menuo -->
        <div class="row" style="margin:10px 0px 10px 0px">
            <div class="three columns alpha">
                <div class ="row">
                    <div class="ten columns alpha">
                        <small>Markė</small>
                        {!! Form::select('marke', $markes, $auto->modelis->marke_id, ['id' => 'marke', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Markė"])!!}
                    </div>
                </div>
            </div>
            <div class="three columns">
                <div class ="row">
                    <div class="ten columns alpha">
                        <small>Modelis</small>
                        {!! Form::select('modelis', $modelis, $auto->modelis_id, ['id' => 'modelis', 'required', 'class'=>'selectpicker', "data-live-search" => "true","title"=>"Modelis"]) !!}
                    </div>
                </div>
            </div>
            <div class="three columns">
                <small>Pirmos registracijos metai</small>
                {!! Form::selectRange('reg_metai', date('Y'), 1950, Carbon\Carbon::parse($auto->pirmos_reg_data)->year, ['class'=>'selectpicker', 'required', "title"=>"Pirmos registracijos metai"])!!}
            </div>
            <div class="three columns">
                <small>Pirmos registracijos mėnuo</small>
                {!! Form::selectRange('reg_menuo', 1, 12, Carbon\Carbon::parse($auto->pirmos_reg_data)->month, ['class'=>'selectpicker', 'required', "title"=>"Pirmos registracijos mėnesis"]) !!}
            </div>
        </div>
        <!-- modelis, marke, pagaminimo metai ir menuo END -->

        <!-- Kebulo tipas, pavaru deze, kuro tipas, spalva -->
        <div class="row" style="margin:10px 0px 10px 0px">
            <div class="three columns alpha">
                <div class ="row">
                    <div class="ten columns alpha">
                        <small>Spalva</small>
                        {!! Form::select('spalva', $spalvos, $auto->spalva_id, ['id' => 'spalva', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Spalva"])!!}
                    </div>
                </div>
            </div>
            <div class="three columns">
                <small>Kėbulo tipas</small>
                {!! Form::select('kebulo_tipas', $kebuloTipai, $auto->kebulo_tipas_id, ['id' => 'kebulo_tipas', 'required', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Kėbulo tipas"])!!}
            </div>
            <div class="three columns">
                <small>Pavarų dėžė</small>
                {!! Form::select('pavaru_deze', $pavaruDezes, $auto->pavaru_deze_id, ['id' => 'pavaru_deze', 'required', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Pavarų dėžė"])!!}
            </div>
            <div class="three columns">
                <small>Kuro tipas</small>
                {!! Form::select('kuro_tipas', $kuroTipai, $auto->kuro_tipas_id, ['id' => 'kuro_tipas', 'required', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Kuro tipas"])!!}
            </div>
        </div>
        <!-- Kebulo tipas, pavaru deze, kuro tipas, spalva END-->

        <!-- Euro standartas, varantieji ratai, klimato valdymas, pirmos reg salis -->
        <div class="row" style="margin:10px 0px 10px 0px">
            <div class="three columns alpha">
                <div class ="row">
                    <div class="ten columns alpha">
                        <small>Pirmos registracijos šalis</small>
                         {!! Form::select('pirmos_reg_salis', $pirmosRegSalis, $auto->pirmos_reg_salis_id, ['id' => 'pirmos_reg_salis', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Pirmos registracijos šalis"])!!}
                    </div>
                </div>
            </div>
            <div class="three columns">
                <small>Euro Standartas</small>
                {!! Form::select('euro_standartas', array('Euro 1' => 'Euro 1', 'Euro 2' => 'Euro 2', 'Euro 3' => 'Euro 3', 'Euro 4' => 'Euro 4', 'Euro 5' => 'Euro 5', 'Euro 6' => 'Euro 6'), 
                $auto->standartas, ['id' => 'euro_standartas', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Euro standartas"]) !!}
            </div>
            <div class="three columns">
                <small>Varantieji ratai</small>
                {!! Form::select('varantieji_ratai', $varantiejiRatai, $auto->varantieji_ratai_id, ['id' => 'varantieji_ratai', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Varantieji Ratai"])!!}
            </div>
            <div class="three columns">
                <small>Klimato valdymas</small>
                {!! Form::select('klimato_valdymas', $klimatoValdymas, $auto->klimato_valdymas_id, ['id' => 'klimato_valdymas', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Klimato valdymas"])!!}
            </div>
        </div>
        <!-- Euro standartas, varantieji ratai, klimato valdymas, pirmos reg salis END-->

        <!-- privalumai 1-->
        <div class="row" style="margin:10px 0px 10px 0px">
            <div class="three columns">
                <small>Apsauga</small>
                {!! Form::select('apsauga[]', $apsaugaPriv, $auto->priv_apsauga->pluck('id')->all(), ['id' => 'apsauga', 'multiple', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Apsauga"])!!}
            </div>
            <div class="three columns">
                <small>Saugumas</small>
                {!! Form::select('saugumas[]', $saugumasPriv, $auto->priv_saugumas->pluck('id')->all(), ['id' => 'saugumas', 'multiple', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Saugumas"])!!}
            </div>
            <div class="three columns">
                <small>Eksterjeras</small>
                {!! Form::select('eksterjeras[]', $eksterjerasPriv, $auto->priv_eksterjeras->pluck('id')->all(), ['id' => 'eksterjeras', 'multiple', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Eksterjeras"])!!}
            </div>
            <div class="three columns">
                <small>Salonas</small>
                {!! Form::select('salonas[]', $salonasPriv, $auto->priv_salonas->pluck('id')->all(), ['id' => 'salonas', 'multiple', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Salonas"])!!}
            </div>
        </div>
        <!-- privalumai 1 END-->

        <!-- privalumai 2-->
        <div class="row" style="margin:10px 0px 10px 0px">
            <div class="three columns">
                <small>Audio/Video</small>
                {!! Form::select('av[]', $avPriv, $auto->priv_av->pluck('id')->all(), ['id' => 'av', 'multiple', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Audio/Video"])!!}
            </div>
            <div class="three columns">
                <small>Elektronika</small>
                {!! Form::select('elektronika[]', $elektronikaPriv, $auto->priv_elektronika->pluck('id')->all(), ['id' => 'elektronika', 'multiple', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Elektronika"])!!}
            </div>
            <div class="three columns">
                <small>Tiuningas</small>
                {!! Form::select('tiuningas[]', $tiuningasPriv, $auto->priv_tiuningas->pluck('id')->all(), ['id' => 'tiuningas', 'multiple', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Tiuningas"])!!}
            </div>
            <div class="three columns">
                <small>Kiti privalumai</small>
                {!! Form::select('kita[]', $kitaPriv, $auto->priv_kita->pluck('id')->all(), ['id' => 'kita', 'multiple', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Kita"])!!}
            </div>
        </div>
        <!-- privalumai 2 END-->
 
        <div class="row">
            <div class="six columns">
                <small>Darbini tūris cm³</small>
                <div class="input">
                    {!! Form::text('darbinis_turis', null, array('class' => 'form-control', 'type' => 'number', 'placeholder' => 'Darbinis tūris (cm³) pvz: 1300', 'step' => '1', 'max' => '10000')) !!}
                </div>
            </div>
            <div class="six columns">
                <div class="checkbox">
                    {!! Form::checkbox('greitai', 1, null, ['id' =>'pranc', 'class' => 'form-control', 'type' => 'checkbox', 'value' => '1']) !!}
                    <label for="pranc">Dar Prancūzijoje</label>
                </div>
            </div>
        </div>

        <!-- kuro sanaudos, rida -->
        <div class="row">
            <div class="three columns alpha">
                <small>Kuro sąnaudos mieste</small>
                <div class="input">
                    {!! Form::text('kuro_san_mieste', null, array('class' => 'form-control', 'type' => 'number', 'placeholder' => 'Kuro sąnaudos mieste pvz: 8.5', 'step' => '0.1', 'max' => '100')) !!}
                </div>
            </div>
            <div class="three columns">
                <small>Kuro sąnaudos užmiestyje</small>
                <div class="input">
                    {!! Form::text('kuro_san_uzmiestyje', null, array('class' => 'form-control', 'type' => 'number', 'placeholder' => 'Užmiestyje', 'step' => '0.1', 'max' => '100')) !!}
                </div>
            </div>
            <div class="three columns">
                <small>Kuro sąnaudos bendrai</small>
                <div class="input">
                    {!! Form::text('kuro_san_bendrai', null, array('class' => 'form-control', 'type' => 'number', 'placeholder' => 'Bendrai', 'step' => '0.1', 'max' => '100')) !!}
                </div>
            </div>
            <div class="three columns">
                <small>Rida</small>
                <div class="input">
                    {!! Form::text('rida', null, array('class' => 'form-control', 'type' => 'number', 'placeholder' => 'Rida', 'step' => '1', 'max' => '1000')) !!}
                </div>
            </div>
        </div>
        <!-- kuro sanaudos, rida END -->

        <!-- galia, ratlankiaim vin -->
        <div class="row">
            <div class="four columns alpha">
                <small>Galia kW</small>
                <div class="input">
                    {!! Form::text('galia_kw', null, array('class' => 'form-control', 'type' => 'number', 'placeholder' => 'Galia Kw', 'step' => '1', 'max' => '1000')) !!}
                </div>
            </div>
            <div class="four columns">
                <small>Ratlankiai</small>
                <div class="input">
                    {!! Form::text('ratlankiai', null, array('class' => 'form-control', 'type' => 'text', 'placeholder' => 'Ratlankiai pvz: R20')) !!}
                </div>
            </div>
            <div class="four columns">
                <small>VIN</small>
                <div class="input">
                    {!! Form::text('kebulo_nr', null, array('class' => 'form-control', 'type' => 'text', 'placeholder' => 'VIN')) !!}
                </div>
            </div>
        </div>
        <!-- galia, ratlankiaim vin END-->

        <!-- Kaina -->
        <div class="row">
            <div class="twelve columns alpha">
                <small>Kaina</small>
                <div class="input">
                    {!! Form::text('kaina', null, array('class' => 'form-control', 'type' => 'number', 'placeholder' => 'Kaina', 'step' => '1', 'max' => '200000', 'required')) !!}
                </div>
            </div>
        </div>
        <!-- Kaina End -->
        
        <!-- Komentaras LT -->
        <div class="row">
            <div class="twelve columns alpha">
                <small>Komentaras Lietuviškai</small>
                <div class="textarea">
                    {!! Form::textarea('komentaras_lt', null, array('class' => 'form-control', 'placeholder' => 'Komentaras lt')) !!}
                </div>
            </div>
        </div>
        <!-- Komentaras LT End -->

        <!-- Komentaras RU -->
        <div class="row">
            <div class="twelve columns alpha">
                <small>Komentaras Rusiškai</small>
                <div class="textarea">
                    {!! Form::textarea('komentaras_ru', null, array('class' => 'form-control', 'placeholder' => 'Komentaras ru')) !!}
                </div>
            </div>
        </div>
        <!-- Komentaras RU End -->

        <!-- Komentaras EN -->
        <div class="row">
            <div class="twelve columns alpha">
                <small>Komentaras Angliškai</small>
                <div class="textarea">
                    {!! Form::textarea('komentaras_en', null, array('class' => 'form-control', 'placeholder' => 'Komentaras en')) !!}
                </div>
            </div>
        </div>
        <!-- Komentaras EN End -->

        <div class="row">
            <div class="input-submit">
                <p> {!! Form::submit('Išsaugoti') !!} </p>
            </div>
        </div>
        {!! Form::close() !!}
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(array('url' => 'admin/upload/'.$auto->id, 'class'=>'dropzone', 'id' => 'fileUpload')) !!}
                {!! Form::close() !!}
                <br /><br />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <button id="deleteAll" type="button" class="btn btn-danger" >Ištrinti visas</button> <br /><br />
                </form>
                {{--  {!! Form::submit('Ištrinti visas', array('class' => 'btn btn-danger', 'id' => 'deleteAll' )) !!} <br /><br />  --}}
            </div>
        </div>
        @foreach (array_chunk($nuotraukos, 4) as $chunk)
        <div class="row nuotraukos">
            @foreach($chunk as $nuotrauka)
           <div class="col-md-3">
                    <div class="car-box horizontal small clearfix"> 
                        <div class="car-image">
                            <img src="{{ URL::asset('images/'.$auto->id.'/'.$nuotrauka) }}" title="nuotrauka" alt="nuotrauka" />
                            <span class="background"></span>
                        </div>
                        <div class="car-content">
                            <div class="car-title">
                                <h3 id="">{{ $nuotrauka }}</h3>
                            </div>
                            <div class="car-price" style="margin:4px">
                                <a href="/admin/{{$auto->id}}/{{$nuotrauka}}" class="clearfix">
                                    <span class="price">Ištrinti</span>
                                    <span class="icon-arrow-right2"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endforeach
    </div>
<!-- **************************** MODALS ***********************************-->

</section>
@endsection

<script type="text/javascript" src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/dropzone.js') }}"></script>
<script>
    Dropzone.options.fileUpload = {
        acceptedFiles: ".jpg",
        paramName: "file",
        autoQueue: true,
        dictDefaultMessage: "Pridėti papildomų nuotraukų"
    };

    $(document).ready(function(){
    $('#deleteAll').click(function( event ) {
        var id = {{$auto->id}};
        var data = {
            "_token": "{{ csrf_token() }}",
            "id": id
        }
        $.ajax({
            url: '/delete',
            type: 'post',
            data: data,
            dataType: 'json',
            success: function( _response ){
                console.log("veikia");
                $(".nuotraukos").remove();
            },
            error: function( _response ){
                console.log("neveikia");
            }
        });
    });
});
</script>
