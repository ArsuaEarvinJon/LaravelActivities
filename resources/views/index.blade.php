@extends('layouts.master')
@section('title'.'Home')
@section('content')

<h5>i am going to show you an array i made</h5>
@foreach($arr as $num)
{{ ($num) }} <br>
@endforeach
@endsection