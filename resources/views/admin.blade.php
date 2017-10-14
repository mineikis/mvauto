@extends('layouts.master')

@section('content')
@section('styles')
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
@stop
@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
@stop
<div class="content">
    <div class="button-wrap"> <a href="#" class="big button light" data-appear-animation="flipInX">Naujas</a> </div>
    @foreach($aktyvus as $auto)
    <div class="row row-container">
        <div class="col-md-3">
            <div class="car-image">
                <img src="{{ URL::asset('images/'.$auto->id.'/1.jpg') }}" title="car" alt="car" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="vcenter">{{$auto->modelis->marke->pavadinimas}} {{$auto->modelis->pavadinimas}} {{$auto->modelis->kita}}</div>
        </div>
        <div class="col-md-3">
            <div class="vcenter">{{$auto->kaina}} €</div>
        </div>
        <div class="col-md-1">
            <div class="vcenter"><a href="admin/parduota/{{$auto->id}}" onclick="return confirm('Tikrai tikrai istrinti??? :)')">Parduota</a></div>
        </div>
        <div class="col-md-1">
            <div class="vcenter"><a href="admin">Keisti</a></div>
        </div>
    </div>
    @endforeach
</div>
@endsection

<style type="text/css">
.row-container {
    padding: 10px;
    text-align: center;
}

.content {
    padding-top: 50px;
    padding-bottom: 50px;
}
.vcenter{
    padding-top: 80px;
}
</style>