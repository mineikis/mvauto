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
        <div class="row">
        
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
                        {!! Form::select('modelis', $modelis, 'null', ['id' => 'modelis', 'class'=>'selectpicker', "data-live-search" => "true","title"=>"Modelis"]) !!}
                    </div>
                    <div class="two columns">
                        <a href="" class="btn" data-toggle="modal" data-target="#myModal">
                        <span class="icon-plus"></span>
                        </a>
                    </div>
                </div>
                
            </div>
            <div class="three columns">
                {!! Form::selectRange('reg_metai', date('Y'), 1950, "null", ['class'=>'selectpicker', "title"=>"Pirmos registracijos metai"])
                !!}
            </div>
            <div class="three columns">
                {!! Form::selectRange('reg_menuo', 1, 12, "null", ['class'=>'selectpicker', "title"=>"Pirmos registracijos mėnesis"]) !!}
            </div>
        </div>
        <div class="input-submit">
            <p> {!! Form::submit('Išsaugoti') !!} </p>
        </div>
    </div>
    {!! Form::close() !!}
    </div>
    </div>

<div class="modal fade" id="addMarke" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Išsaugoti markę</h4>
            </div>
             {!! Form::open(array('url' => 'store')) !!}
            <div class="modal-body">
                <div class="input">
                    <input name="naujaMarke" type="text" placeholder="BMW, Volvo..." />
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
                $('#addMarke').hide();
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
        },
        error: function( _response ){
            alert("noo");
        }
    });
});
    });
</script>
