@extends('layouts.master')
@section('title', 'Carlos Bazán')
@section('header', 'Carlos Bazán')
    @stop
@section('content')
    Altura (h): {{$h}}                  <br>
    Lado "a": {{$a}}                    <br>
    Lado "b": {{$b}}                    <br>
    Área del trapecio: {{$area}}
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
