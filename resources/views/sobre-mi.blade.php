@extends('layouts.master2')
@section('title', 'Sobre mi')
@section('header', 'Marina Santa Anna Gaytán')
@section('content')
    <center>
    <div>
    Yo también soy un pequeño artista en desarrollo que quiere crecer y éstos son los dibujos que más me han gustado:
    </div>

    <br>
    <br>
    <br>
    
    <div class="container">

        <div class="col-md-12">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
              <li data-target="#demo" data-slide-to="3"></li>
              <li data-target="#demo" data-slide-to="4"></li>
              <li data-target="#demo" data-slide-to="5"></li>
              
            </ul>
    
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../images/mar1.jpg" height="500">
            </div>
            <div class="carousel-item">
              <img src="../images/mar2.jpg" height="500">
            </div>
            <div class="carousel-item">
              <img src="../images/mar3.jpg" height="500">
            </div>
            <div class="carousel-item">
              <img src="../images/mar4.jpg" height="500">
            </div>
            <div class="carousel-item">
              <img src="../images/mar5.jpg" height="500">
            </div>
            <div class="carousel-item">
              <img src="../images/mar6.jpg" height="500">
            </div>

          </div>
          

    <div id="botones" style="font-size: 60px; color: black;">
        <a class="carousel-control-prev" href="#demo"  data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo"  data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
  </div>

    </center>
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
