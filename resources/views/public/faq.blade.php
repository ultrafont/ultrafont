@extends('layouts.master')

@section('script_head')
<link href="{{ asset('assets/css/jump.css') }}" rel="stylesheet">
@endsection

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
                            <li><a href="{{ route('techies') }}">Cosas Técnicas</a></li>
                            <li><a href="{{ route('contact') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar -->

    <div class="container">

        <div class="row tech2">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1>Preguntas frecuentes</h1>
                
                <h3>¿Debo dar adelanto por la elaboración de mi proyecto?</h3>
                <p>No, se trabaja bajo un esquema de pago del 40% inicial solo cuando el cliente ve y aprueba la interfaz gráfica.</p>
                <h3>¿Se trabaja bajo un contrato?</h3>
                <p>Si, en este se especifican desde las cosas técnicas hasta los pagos, tiempos de entregas, penalizaciones por impuntualidad, etc.</p>
                <h3>¿Como es el mantenimiento de la aplicación?</h3>
                <p>El costo de mantenimiento mensual se especifica en el contrato. Este puede variar según el proyecto.</p>
                <h3>¿Puedo obtener factura electrónica?</h3>
                <p>Si, emitimos factura electrónica y nuestros precios incluyen IVA.</p>
                <h3>¿Que empresa elabora el software?</h3>
                <p>La empresa que factura los pagos por el software que usted recibe se llama Ultrafont Soluciones en Tecnología S.A. de C.V.</p>
                <h3>¿Donde se ubica la empresa?</h3>
                <p>Tiene oficina en Guadalajara, aunque podemos visitarte dentro o fuera de la ciudad si el proyecto así lo requiere.</p>
                <h3>¿Son puntuales a la hora de entregar?</h3>
                <p>Si, se trabaja mucho en el análisis del proyecto para que el tiempo estimado de entrega sea lo más apegado a la realidad del proyecto.</p>
            </div>    
            <div class="col-lg-3"></div>
        </div>

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
