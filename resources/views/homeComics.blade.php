@extends('layouts.homeLayout')

@section('pageTitle', 'DC | Welcome to DC')

@section('mainContent')
    @foreach ($series as $key)
        <img src="{{$key['thumb']}}" alt="">
    @endforeach
@endsection