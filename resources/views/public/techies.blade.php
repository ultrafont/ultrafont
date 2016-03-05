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
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active"><a href="{{ route('techies') }}">Cosas Técnicas</a></li>
                            <li><a href="{{ route('contact') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar -->

    <div class="container marketing tech">
        <h1 class="text-center">Tecnologías que utilizamos</h1>

        <!-- Features-->
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Aplicaciones en Web: <span class="text-muted">Desarrolladas desde 0 con Laravel (PHP)</span></h2>
                <p class="lead">PHP (Laravel), Linux, Apache/Nginx y MySQL/Postgres son las tecnologías que utilizamos para desarrollar tu app en web.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="{{ asset('assets/images/stuff6.png') }}"  alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="{{ asset('assets/images/stuff7.png') }}" alt="Generic placeholder image">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">App para iOS: <span class="text-muted">Desarrolladas con Swift</span></h2>
                <p class="lead">Todas las increibles nuevas aplicaciones para iOS se desarrollan con el lenguaje nativo de Apple.</p>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">App para Android: <span class="text-muted">Desarrolladas en Java</span></h2>
                <p class="lead">Lenguaje nativo que aprovecha el Material Design para desarrollar apps hermosas. Proximamente compatibilidad con Android 6 Marshmallow.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="{{ asset('assets/images/stuff5.png') }}"  alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="{{ asset('assets/images/stuff8.png') }}" alt="Generic placeholder image">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Front-end: <span class="text-muted">HTML5 y CSS3</span></h2>
                <p class="lead">Elegimos entre AngularJS/jQuery/React, Bootstrap/Foundation según las necesidades del cliente. Siempre desarrollamos Responsive Design.</p>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Publicidad: <span class="text-muted">Inbound y Outbound Marketing</span></h2>
                <p class="lead">Diseño de campañas de marketing en Google Adwords, Facebook, Instagram, Twitter, Email Marketing, Email Transaccional y Mensajes publicitarios más humanos, trabajamos todo como un traje hecho a la medida para tu empresa.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="{{ asset('assets/images/stuff9.png') }}" alt="Generic placeholder image">
            </div>
        </div>
        <hr class="featurette-divider">
        <!-- Features-->

        <footer>
            <p>
                &copy; 2016 Ultrafont Soluciones en Tecnología S.A. de C.V.
                &middot; <a href="http://www.github.com/ultrafont" target="_blank" >GitHub</a> 
                &middot; <a href="{{ route('faq') }}">FAQ</a>
                &middot; <a href="{{ route('privacy') }}">Privacidad</a>
            </p>
        </footer>
    </div><!-- /.container -->
@endsection
