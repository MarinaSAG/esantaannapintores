@extends('layouts.master2')
@section('title', 'Leonid Afremov')
@section('header', 'Leonid Afremov')
@section('content')
    <center><img style="float: center; margin: 10px 10px 10px 10px;" src="../images/leonid.jpg" width="300"></center><br>
    Leonid Afremov, pintor moderno impresionista de ascendencia rusa. Con su paleta y óleos  ha desarrollado un estilo único y que puede ser fácilmente identificable como suyo gracias a su técnica. Conocido como uno de los principales artistas que se representan a sí mismos y que vende sus obras exclusivamente por Internet sin contacto con galerías, ha usado herramientas como eBay (plataforma de ventas online) para lograr su difusión.
    <br><br>
    Nacido en 1955 en la antigua URSS, es hijo de padres judíos dedicados a la industria zapatera y siempre estuvo interesado en el arte. El joven atendía a todo tipo de talleres artísticos que se ofrecían en su pueblo, con lo que su padre identificó el talento del chico de 14 años y lo impulsó en su aprendizaje.
    <br><br>
    En 1973 fue aceptado en la Universidad Vitebsk donde estudió arte y fue introducido al trabajo de Marc Chagall, Picasso, Dalí y Modigliani. Por azares del destino, en mayo de 1990 se mudó con toda su familia a Israel en la ola migratoria y tuvo que renunciar a su nacionalidad rusa para obtener la israelí. 
    <br><br>
    Después de que en 2001 su galería fuera robada, decidió mudarse a otro lugar, teniendo como destino los Estados Unidos. Ahí fue cuando –debido a la exposición de medios como eBay –pudo enriquecerse y vender sus obras directamente. Además, gracias a la fama cibernética, fue invitado a distintos shows de televisión en el país.
    <br><br>
    El pintor vivió el resto de su vida en México, murió el año pasado (2019) en Playa del Carmen. Se cree que sus obras no tienen ningún tipo de mensaje oculto, sólo reflejan emociones y algunos recuerdos. La mayor parte de sus pinturas están basadas en fotografías que él mismo toma en sus distintos viajes por el mundo, además de apelar a casi cualquier tipo de edad, etnia y grupo social.
    </center>
    @stop
@section('footer')
    @parent {{date('Y, M')}} </div>
@stop
