@extends('layouts.master')
@section('title', 'Login')
@section('header', 'Log in')
@section('content')

    <center>
    <form action="{{action('pages@validarLogin')}}" method="POST">
        {{csrf_field()}}
        <label for="user">Usuario</label>
        <br>
        <input type="text" name="user">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="text" name="password">
        <br>
        <label for="key">Key</label>
        <br>
        <input type="text" name="key">
        <br><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    </center>
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
