@extends('layouts.master2')
@section('title', 'Jean Leon Gerome')
@section('header', 'Jean Leon Gerome')
@section('content')
    <center><img style="float: center; margin: 10px 10px 10px 10px;" src="../images/jean.jpg" width="300"></center><br>
    Jean-Léon Gérôme fue un academicista francés que realizó obras de temática histórica y mitológica llevando a lo más alto el arte académico francés. Como Bouguereau, otro ilustre artista del académicismo, Gérôme fue principio fue un convencido anti-impresionista, pero poco a poco se fue dando cuenta de la importancia del movimiento, llegando a aceptarlo.
    <br><br>
    Jean-Léon Gérôme fue el clásico academicista: Excelente estudiante, viajó a Italia para conocer a los antiguos, ganó premios oficiales, expuso en los salones del estado, fue admirado por críticos y querido por el público, lo enchufaron como maestro de la Escuela de Bellas Artes, fue llamado como decorador de palacios y nombrado Caballero de la Legión de Honor. Un sinónimo de popularidad y prestigio.
    <br><br>
    Con 30 años Gérôme viaja a Turquía y Egipto. Estos viajes por oriente influyeron notablemente en su obra y bastantes cuadros de la época están inspirados en ese exotismo.
    <br><br>
    En esos años también empieza a nacer la «moda decadente» del impresionismo, pero después de la exposición de Édouard Manet en 1884, finalmente admitió que «no era tan malo como pensaba».
    <br><br>
    Murió en su taller en 1904, justo cuando nacían las vanguardias, antítesis de su obra. Dicen que al espichar se encontraba delante de un retrato de su admirado Rembrandt.
    </center>
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
