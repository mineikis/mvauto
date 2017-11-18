@extends('layouts.master')
@section('content')
@section('styles')
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css') }}">
@stop
@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js') }}"></script>
@stop
<section class="space-top-and-bottom medium">
    <div class="container">
    {!! Form::open(array('url' => 'store', 'files' => true)) !!}
    <!-- modelis, marke, pagaminimo metai ir menuo -->
        <div class="row" style="margin:10px 0px 10px 0px">
        
            <!-- if there are login errors, show them here -->
            <p>
                {!! $errors->first('email') !!} 
                {!! $errors->first('password') !!}
            </p>
            <div class="three columns alpha">
                <div class ="row">
                    <div class="ten columns alpha">
                        {!! Form::select('marke', $markes, 'null', ['id' => 'marke', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Markė"])!!}
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
                        {!! Form::select('modelis', $modelis, 'null', ['id' => 'modelis', 'required', 'class'=>'selectpicker', "data-live-search" => "true","title"=>"Modelis"]) !!}
                    </div>
                    <div class="two columns">
                        <a href="" class="btn" data-toggle="modal" data-target="#addModelis">
                        <span class="icon-plus"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="three columns">
                {!! Form::selectRange('reg_metai', date('Y'), 1950, "null", ['class'=>'selectpicker', 'required', "title"=>"Pirmos registracijos metai"])
                !!}
            </div>
            <div class="three columns">
                {!! Form::selectRange('reg_menuo', 1, 12, "null", ['class'=>'selectpicker', 'required', "title"=>"Pirmos registracijos mėnesis"]) !!}
            </div>
        </div>
        <!-- modelis, marke, pagaminimo metai ir menuo END -->

        <!-- Kebulo tipas, pavaru deze, kuro tipas, spalva -->
        <div class="row" style="margin:10px 0px 10px 0px">
            <div class="three columns alpha">
                <div class ="row">
                    <div class="ten columns alpha">
                        {!! Form::select('spalva', $spalvos, 'null', ['id' => 'spalva', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Spalva"])!!}
                    </div>
                    <div class="two columns">
                        <a href="" class="btn" data-toggle="modal" data-target="#addSpalva">
                        <span class="icon-plus"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="three columns">
                {!! Form::select('kebulo_tipas', $kebuloTipai, 'null', ['id' => 'kebulo_tipas', 'required', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Kėbulo tipas"])!!}
            </div>
            <div class="three columns">
                {!! Form::select('pavaru_deze', $pavaruDezes, 'null', ['id' => 'pavaru_deze', 'required', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Pavarų dėžė"])!!}
            </div>
            <div class="three columns">
                {!! Form::select('kuro_tipas', $kuroTipai, 'null', ['id' => 'kuro_tipas', 'required', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Kuro tipas"])!!}
            </div>
        </div>
        <!-- Kebulo tipas, pavaru deze, kuro tipas, spalva END-->

        <!-- Euro standartas, varantieji ratai, klimato valdymas, pirmos reg salis -->
        <div class="row" style="margin:10px 0px 10px 0px">
            <div class="three columns alpha">
                <div class ="row">
                    <div class="ten columns alpha">
                         {!! Form::select('pirmos_reg_salis', $pirmosRegSalis, 'null', ['id' => 'pirmos_reg_salis', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Pirmos registracijos šalis"])!!}
                    </div>
                    <div class="two columns">
                        <a href="" class="btn" data-toggle="modal" data-target="#addPirmosRegSali">
                        <span class="icon-plus"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="three columns">
                <select name="euro_standartas" id="euro_standartas", class ="selectpicker" data-live-search="true" title="Euro standartas">
                    <option value="Euro 1">Euro 1</option>
                    <option value="Euro 2">Euro 2</option>
                    <option value="Euro 3">Euro 3</option>
                    <option value="Euro 4">Euro 4</option>
                    <option value="Euro 5">Euro 5</option>
                    <option value="Euro 6">Euro 6</option>
                </select>
            </div>
            <div class="three columns">
                {!! Form::select('varantieji_ratai', $varantiejiRatai, 'null', ['id' => 'varantieji_ratai', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Varantieji Ratai"])!!}
            </div>
            <div class="three columns">
                {!! Form::select('klimato_valdymas', $klimatoValdymas, 'null', ['id' => 'klimato_valdymas', 'class'=>'selectpicker', "data-live-search" => "true", "title"=>"Klimato valdymas"])!!}
            </div>
        </div>
        <!-- Euro standartas, varantieji ratai, klimato valdymas, pirmos reg salis END-->

        <!-- kuro sanaudos, rida -->
        <div class="row">
            <div class="three columns alpha">
                <div class="input">
                    <input name="mieste" type="number" placeholder="Kuro sąnaudos mieste pvz: 8.5" step="0.1" max="100"></input>
                </div>
            </div>
            <div class="three columns">
                <div class="input">
                    <input name="uzmiestyje" type="number" placeholder="Užmiestyje" step="0.1" max="100"></input>
                </div>
            </div>
            <div class="three columns">
                <div class="input">
                    <input name="bendrai" type="number" placeholder="Bendrai" step="0.1" max="100"></input>
                </div>
            </div>
            <div class="three columns">
                <div class="input">
                    <input name="rida" type="number" placeholder="Rida" step="1"  max="1000000"></input>
                </div>
            </div>
        </div>
        <!-- kuro sanaudos, rida END -->

        <!-- kuro sanaudos, rida -->
        <div class="row">
            <div class="four columns alpha">
                <div class="input">
                    <input name="galia" type="number" placeholder="Galia Kw" step="1" max="1000"></input>
                </div>
            </div>
            <div class="four columns">
                <div class="input">
                    <input name="ratlankiai" type="text" placeholder="Ratlankiai pvz: R20"></input>
                </div>
            </div>
            <div class="four columns">
                <div class="input">
                    <input name="vin" type="text" placeholder="VIN"></input>
                </div>
            </div>
        </div>
        <!-- kuro sanaudos, rida END -->

        <!-- Kaina -->
        <div class="row">
            <div class="twelve columns alpha">
                <div class="input">
                    <input name="kaina" type="number" placeholder="Kaina" step="1" max="200000" required></input>
                </div>
            </div>
        <div>
        <!-- Kaina End -->
        
        <!-- Komentaras LT -->
        <div class="row">
            <div class="twelve columns alpha">
                <div class="textarea">
                    <textarea name="komentaras_lt" placeholder="Komenataras lt"></textarea>
                </div>
            </div>
        <div>
        <!-- Komentaras LT End -->

        <!-- Komentaras RU -->
        <div class="row">
            <div class="twelve columns alpha">
                <div class="textarea">
                    <textarea name="komentaras_ru" placeholder="Komenataras ru"></textarea>
                </div>
            </div>
        <div>
        <!-- Komentaras RU End -->

        <!-- Komentaras EN -->
        <div class="row">
            <div class="twelve columns alpha">
                <div class="textarea">
                    <textarea name="komentaras_en" placeholder="Komenataras en"></textarea>
                </div>
            </div>
        <div>
        <!-- Komentaras EN End -->

        <div class="input-submit">
            <p> {!! Form::submit('Išsaugoti') !!} </p>
        </div>
    </div>
    {!! Form::close() !!}
    </div>
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
<script>
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
