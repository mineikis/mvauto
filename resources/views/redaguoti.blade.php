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
                    <div class="two columns">
                        <a href="" class="btn" data-toggle="modal" data-target="#addMarke">
                        <span class="icon-plus"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="three columns">
                <div class ="row">
                    <div class="ten columns alpha">
                        <small>Modelis</small>
                        {!! Form::select('modelis', $modelis, $auto->modelis_id, ['id' => 'modelis', 'required', 'class'=>'selectpicker', "data-live-search" => "true","title"=>"Modelis"]) !!}
                    </div>
                    <div class="two columns">
                        <a href="" class="btn" data-toggle="modal" data-target="#addModelis">
                        <span class="icon-plus"></span>
                        </a>
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
                    <div class="two columns">
                        <a href="" class="btn" data-toggle="modal" data-target="#addSpalva">
                        <span class="icon-plus"></span>
                        </a>
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
                    <div class="two columns">
                        <a href="" class="btn" data-toggle="modal" data-target="#addPirmosRegSali">
                        <span class="icon-plus"></span>
                        </a>
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

        @foreach (array_chunk($nuotraukos, 4) as $chunk)
        <div class="row">
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

        <div class="row">
            <div class="input-submit">
                <p> {!! Form::submit('Išsaugoti') !!} </p>
            </div>
        </div>
        {!! Form::close() !!}
        
    {!! Form::open(array('url' => 'admin/upload/'.$auto->id, 'class'=>'dropzone', 'id' => 'fileUpload')) !!}
    {!! Form::close() !!}
    </div>
<!-- **************************** MODALS ***********************************-->

<!-- Pirmos Reg salis -->
<div class="modal fade" id="addPirmosRegSali" tabindex="-1" role="dialog" aria-labelledby="salis">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="salis">Nauja pirmos registracijos šalis</h4>
            </div>
             {!! Form::open(array('url' => 'store')) !!}
            <div class="modal-body">
                <div class="input">
                    <input name="naujaSalisLt" type="text" placeholder="Lietuviškai" required />
                </div>
                <div class="input">
                    <input name="naujaSalisRu" type="text" placeholder="Rusiškai" required />
                </div>
                <div class="input">
                    <input name="naujaSalisEn" type="text" placeholder="Angliškai" required />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::button('Išsaugoti', array('id' => 'saveSalis', 'class'=>'btn btn-primary')) !!} </p>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- Pirmos Reg salis END -->

<!-- SPALVA -->
<div class="modal fade" id="addSpalva" tabindex="-1" role="dialog" aria-labelledby="spalva">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="spalva">Nauja spalva</h4>
            </div>
             {!! Form::open(array('url' => 'store')) !!}
            <div class="modal-body">
                <div class="input">
                    <input name="naujaSpalvaLt" type="text" placeholder="Lietuviškai" required />
                </div>
                <div class="input">
                    <input name="naujaSpalvaRu" type="text" placeholder="Rusiškai" required />
                </div>
                <div class="input">
                    <input name="naujaSpalvaEn" type="text" placeholder="Angliškai" required />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::button('Išsaugoti', array('id' => 'saveSpalva', 'class'=>'btn btn-primary')) !!} </p>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- SPALVA END -->

<!-- MARKE -->
<div class="modal fade" id="addMarke" tabindex="-1" role="dialog" aria-labelledby="marke">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="marke">Nauja markė</h4>
            </div>
             {!! Form::open(array('url' => 'store')) !!}
            <div class="modal-body">
                <div class="input">
                    <input name="naujaMarke" type="text" placeholder="BMW, Volvo..." required />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::button('Išsaugoti', array('id' => 'saveMarke', 'class'=>'btn btn-primary')) !!} </p>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- MARKE END -->

<!-- MODELIS -->
<div class="modal fade" id="addModelis" tabindex="-1" role="dialog" aria-labelledby="modelis">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modelis">Naujas modelis</h4>
            </div>
             {!! Form::open(array('url' => 'store')) !!}
            <div class="modal-body">
                {!! Form::select('markesModelis', $markes, 'null', ['id' => 'markesModeliui', 'required', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Markė"])!!}
                <div class="input">
                    <input name="naujasModelis" type="text" placeholder="A6, 730D..." required/>
                </div>
                <div class="input">
                    <input name="kita" type="text" placeholder="Kita info, pvz: Vogue, Phase II..." />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::button('Išsaugoti', array('id' => 'saveModelis', 'class'=>'btn btn-primary')) !!} </p>
            </div>
            {!! Form::close() !!}
        </div> 
    </div>
</div>
<!-- MODELIS END -->
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
    
    $('#saveMarke').click(function( event ) {
        event.preventDefault();
        $.ajax({
            url: 'marke',
            type: 'post',
            data: $('form').serialize(),
            dataType: 'json',
            success: function( _response ){
                $('#marke').append('<option value="'+ _response.id +'">'+ _response.pavadinimas +'</option>');
                $('#marke').selectpicker('refresh');
                $('#marke').selectpicker('val', _response.id);
                $('#addMarke').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            },
            error: function( _response ){
                console.log(_response);
                alert("Kazkur klaida ivelei :) paziurek ar viska suvedei :) jei viskas ok, vadinas as kazkur klaida iveliau, skambink :)");
            }
        });
    });

    $('#saveModelis').click(function( event ) {
        event.preventDefault();
        $.ajax({
            url: 'modelis',
            type: 'post',
            data: $('form').serialize(),
            dataType: 'json',
            success: function( _response ){
                $('#modelis').append('<option value="'+ _response.id +'">'+ _response.pavadinimas + ' ' + _response.kita + '</option>');
                $('#modelis').selectpicker('refresh');
                $('#modelis').selectpicker('val', _response.id);
                $('#addModelis').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            },
            error: function( _response ){
                console.log(_response);
                alert("Kazkur klaida ivelei :) paziurek ar viska suvedei :) jei viskas ok, skambink :)");
            }
        });
    });

    $('#saveSpalva').click(function( event ) {
        event.preventDefault();
        $.ajax({
            url: 'spalva',
            type: 'post',
            data: $('form').serialize(),
            dataType: 'json',
            success: function( _response ){
                $('#spalva').append('<option value="'+ _response.id +'">'+ _response.pavadinimas_lt +'</option>');
                $('#spalva').selectpicker('refresh');
                $('#spalva').selectpicker('val', _response.id);
                $('#addSpalva').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            },
            error: function( _response ){
                console.log(_response);
                alert("Kazkur klaida ivelei :) paziurek ar viska suvedei :) jei viskas ok, skambink :)");
            }
        });
    });

    $('#saveSalis').click(function( event ) {
        event.preventDefault();
        $.ajax({
            url: 'salis',
            type: 'post',
            data: $('form').serialize(),
            dataType: 'json',
            success: function( _response ){
                $('#pirmos_reg_salis').append('<option value="'+ _response.id +'">'+ _response.pavadinimas_lt +'</option>');
                $('#pirmos_reg_salis').selectpicker('refresh');
                $('#pirmos_reg_salis').selectpicker('val', _response.id);
                $('#addPirmosRegSali').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
            },
            error: function( _response ){
                console.log(_response);
                alert("Kazkur klaida ivelei :) paziurek ar viska suvedei :) jei viskas ok, skambink :)");
            }
        });
    });
});
</script>
