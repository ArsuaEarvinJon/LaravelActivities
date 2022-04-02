@extends('layouts.master')
@section('title'.'Post')
@section('content')

<h1>my details</h1>
<br>
<h1>my fave artists are:</h1>
<br>
@foreach($artists as $fave)
{{ $fave }} <br>
@endforeach

<h5>i am {{ ($name) }}</h5>
<br>
<h5>and i am {{ ($age) }} years old</h5>
@endsection