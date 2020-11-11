@extends('layouts.master2')
@section('title', 'Manuel Felguerez')
@section('header', 'Manuel Felguerez')
@section('content')
    <center>
    <img style="float: center; margin: 10px 10px 10px 10px;" src="../images/manuel.jpg" width="300"></center><br>
    Pintor y escultor mexicano, nace en Zacatecas en 1928. En los inicios de su 
    cación artística se inscribió en la Academia de San Carlos de la cual 
    salió después de 4 meses por su desacuerdo en el énfasis que se hacía de 
    la Escuela Mexicana de Pintura, tema caduco y demasiado explotado para 
    la época del artista. Sin embargo continuó su educación en La Esmeralda, 
    en la Escuela Nacional de Artes Plásticas y en otras dos academias 
    parisinas gracias a una beca del gobierno francés. A su regreso a México 
    se une primer movimiento de artistas abstractos nacionales que forma 
    parte de la Generación de la Ruptura. En su trayectoria ha recibido como
     distinciones la Beca del gobierno Francés (1954); el Segundo Premio de 
     Pintura en la Primera Trienal de Nueva Delhi, India (1968); el Gran 
     Premio de Honor en la XIII Bienal de Sao Paulo, Brasil (1975), la Beca 
     Guggenheim (1975), el Premio Nacional de Ciencias y Arte en el área de 
     Bellas Artes, México (1988), y en 1993 fue designado Creador Emérito 
     por el Sistema Nacional de Creadores de Arte de México.
    </center> 
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
