@extends('layouts.master')
@section('title', 'Login')
@section('header', 'Log in')
@section('content')
    <!--<form action="{{action('pages@validarLogin')}}" method="post">
        <label for="user">Usuario</label>
        <input type="text" name="user">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        <label for="key">Key</label>
        <input type="text" name="key">
        <br>
        <input type="submit" value="submit">
    <form>-->
    aaa
    @parent
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
