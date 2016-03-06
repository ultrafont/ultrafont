@extends('layouts.master')

@section('content')
    <!-- Navbar -->
    <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ route('home') }}"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> UltraFont</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('techies') }}">Cosas Técnicas</a></li>
                            <li><a href="{{ route('contact') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar -->

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img class="first-slide" src="assets/images/1.png" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Tu idea convertida en App</h1>
                        <p>Aplicaciones estables, Basadas en Laravel, Mantenimiento fácil, Código escalable, Basado en el patron MVC</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('contact') }}" role="button">Contactar</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="assets/images/2.png" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Sólido como roca, Hermoso como diamante</h1>
                        <p>Sin plantillas predeterminadas, Te llevamos de la mano de la idea hasta el día de lanzamiento</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('contact') }}" role="button">Contar mi Proyecto</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="assets/images/3.png" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Como tener tu propia Red Social</h1>
                        <p>Sistemas internos como una Bonita y Moderna Red Social... solo para tu empresa</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('contact') }}" role="button">Contactar Hoy</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->
    <!-- Carousel -->

    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="assets/images/req3.svg"  alt="Generic placeholder image" width="140" height="140">
                <h2>Requerimientos</h2>
                <p>Hacemos una lista de requerimientos para tener un analisis del tiempo que tomará desarollar la idea.</p>
                <p><a class="btn btn-default" href="{{ route('contact') }}" role="button">Contactar &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="assets/images/req2.svg" alt="Generic placeholder image" width="140" height="140">
                <h2>Maquetado y Prototipo</h2>
                <p>Desarrollamos un prototipo de interfaz gráfica y solo cuando el cliente esta satisfecho se inicia con el desarollo completo de la aplicación.</p>
                <p><a class="btn btn-default" href="{{ route('contact') }}" role="button">Contactar &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="assets/images/req1.svg" alt="Generic placeholder image" width="140" height="140">
                <h2>Desarrollo Nativo</h2>
                <p>Todo nuestro software es desarollo nativo, en iOS, Android y Web, desarrollamos de 0 a 100 de forma nativa, dando seguridad y estabilidad.</p>
                <p><a class="btn btn-default" href="{{ route('contact') }}" role="button">Contactar &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <!-- Features-->
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Aplicaciones en Android y iOS <span class="text-muted">Con panel en Web</span></h2>
                <p class="lead">Desarollamos tu propio Uber, Netflix, Spotify, Twitter o lo que busques en tu empresa.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="assets/images/stuff4.png"  alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="assets/images/stuff.png" alt="Generic placeholder image">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Desde diseños estáticos, <span class="text-muted">hasta tu propia red social</span></h2>
                <p class="lead">Si tienes una idea de app, entonces se puede analizar y desarollar a tu gusto y necesidades, crecerla despues si lo necesitas.</p>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Caso de éxito: <a href="http://fijaanuncios.com" target="_blank" >FijaAnuncios</a> <span class="text-muted">Competencia de SegundaMano.mx</span></h2>
                <p class="lead">Un sistema completo que incluye panel de administrador para enviar emails, administrar usuarios y anuncios, estadísticas internas, subida de archivos, bases de datos y todo lo que tu sistema demande.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="assets/images/stuff3.png"  alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <p class="lead"><a href="{{ route('techies') }}" class="btn btn-primary">Ver más detalles técnicos</a> <a href="{{ route('contact') }}" class="btn btn-success">Contactar</a></p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="assets/images/stuff2.png" alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-12">
                <h3 class="text-center">Domicilio</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d22140.24833312385!2d-103.37823365747457!3d20.679187915148557!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc347ca9a22b9cccb!2sNevermind!5e0!3m2!1sen!2smx!4v1457216602649" class="embed-responsive-item" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
        <!-- Features-->
        
        <footer>
            <p class="pull-right"><a href="#"><span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span> Regresar</a></p>
            <p>
                &copy; 2016 Ultrafont Soluciones en Tecnología S.A. de C.V.
                &middot; <a href="http://www.github.com/ultrafont" target="_blank" >GitHub</a> 
                &middot; <a href="{{ route('faq') }}">FAQ</a>
                &middot; <a href="{{ route('privacy') }}">Privacidad</a>
            </p>
        </footer>
    </div><!-- /.container -->
@endsection
