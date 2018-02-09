@extends('layouts')

@section('header')
	@include('header')
@stop


@section('content')
	{!! $data['content'] !!}
@stop


@section('footer')
	@include('footer')
@stop