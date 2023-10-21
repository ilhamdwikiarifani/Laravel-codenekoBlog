@extends('frontEnd.index')

@section('bodyContent')
<div style="margin-top: 95px">@include('frontEnd.components.carouselText')</div>
@include('frontEnd.layouts.hero')
@include('frontEnd.layouts.latestwork')
@include('frontEnd.layouts.latestpost')
@endsection