@extends('layouts.master')
@section('title', 'Pintores')
@section('header', 'GRANDES PINTORES')
@section('content')
<center>
<figure class="snip1033">
        <img src="https://www.otroangulo.info/fabricaweb/wp-content/uploads/Felguerez-4.jpg" alt="sample20" />
        <figcaption>
          <div class="left">
            <h3 class="blue">Manuel</h3>
          </div>
          <div class="right">
            <h3 class="white">Felguerez</h3>
          </div>
        </figcaption>
        <div class="center"><i class="ion-ios-loop-strong"></i></div>
        <a href="manuel-felguerez"></a>
    </figure>

    <figure class="snip1033"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Leonid_Afremov_-_Last_Trolley_At_Night_%26_Retro_Car_Near_The_House_-_2015.jpg" alt="sample21" />
        <figcaption>
          <div class="left">
            <h3 class="red">Leonid</h3>
          </div>
          <div class="right">
            <h3 class="white">Afremov</h3>
          </div>
        </figcaption>
        <div class="center"><i class="ion-ios-loop-strong"></i></div>
        <a href="leonid-afremov"></a>
    </figure>
    
    <figure class="snip1033"><img src="https://historia-arte.com/_/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpbSI6WyJcL2FydGlzdFwvaW1hZ2VGaWxlXC8xODg2X2plYW4tbGVvbl9nZXJvbWVfLV9zZWxmX3BvcnRyYWl0LmpwZyIsInJlc2l6ZUNyb3AsNDAwLDQwMCxDUk9QX0VOVFJPUFkiXX0.padPEsn3ZZGFw19l7Gu/aRFmX-P47Nz4UX-RsJKhk1Dk.jpg" alt="sample22" />
        <figcaption>
          <div class="left">
            <h3 class="yellow">Jean Leon</h3>
          </div>
          <div class="right">
            <h3 class="white">Gerome</h3>
          </div>
        </figcaption>
        <div class="center"><i class="ion-ios-loop-strong"></i></div>
        <a href="jean-leon-gerome"></a>
    </figure>
    
    <figure class="snip1033"><img src="https://www.nssoaxaca.com/wp-content/uploads/2020/01/pintor-oaxaqueno-crea-obras-para-serie-de-disney.jpg" alt="sample23" />
        <figcaption>
          <div class="left">
            <h3 class="green">Carlos</h3>
          </div>
          <div class="right">
            <h3 class="white">Bazan</h3>
          </div>
        </figcaption>
        <div class="center"><i class="ion-ios-loop-strong"></i></div>
        <a href="carlos-bazan"></a>
      </figure>
      </center>
    @stop

@section('about', 'Sobre Mi')
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
