@extends('layouts.master')

@section('content')
<div class="container" style="margin-bottom: 200px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
<!--                 <form class="form-horizontal" method="POST" action="/authenticate">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="three columns alpha">
                                <div class="input">
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                                <div class="input">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <div class="three columns alpha">
                                        <div class="input-submit">
                                            <input type="submit" value="Prisijungti" class="submitform" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> -->
                    {!! Form::open(array('url' => 'authenticate')) !!}
                    <h1>Prisijungti</h1>
                    
                    <!-- if there are login errors, show them here -->
                    <p>
                        {!! $errors->first('email') !!}
                        {!! $errors->first('password') !!}
                    </p>
                    <div class="three columns alpha">
                        <div class="input">
                            {!! Form::text('email', null, array('placeholder' => 'awesome@awesome.com')) !!}
                        </div>
                        <div class="input">
                            {!! Form::password('password') !!}
                        </div>
                        <div class="input-submit">
                            <p> {!! Form::submit('Prisijungti!') !!} </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
</div>
</div>
@endsection
