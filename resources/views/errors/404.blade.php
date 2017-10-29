@extends('layouts.master')

@section('content')

@section('search')
@include('search')
@show

<section class="space-top-and-bottom">
    <div class="container">
        <div class="row">
            <div class="ten columns space-bottom push_two" data-appear-animation="bounceIn">
                <img src="{{ URL::asset('images/404.jpg') }}" title="" alt="" />
            </div>
        </div>
    </div>
</section>

@section('subfooter')
@include('subfooter')
@show
@stop