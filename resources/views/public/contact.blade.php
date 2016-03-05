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
                            <li><a href="{{ route('techies') }}">Cosas Técnicas</a></li>
                            <li class="active"><a href="{{ route('contact') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar -->

    <div class="container marketing">

        <div class="row contact">
            <div class="col-lg-2">
            </div>   
            <div class="col-lg-8">

                <h1>Cuéntanos tu proyecto</h1>

                <div class="row">
                    <div class="col-lg-4">
                        <p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Teléfono</p>
                        <img src="{{ asset('assets/images/tel.png') }}" />
                    </div> 
                    <div class="col-lg-4">
                        <p><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Ubicación</p>
                        <img src="{{ asset('assets/images/city.png') }}" />
                    </div> 
                    <div class="col-lg-4">
                        <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email</p>
                        <img src="{{ asset('assets/images/email.png') }}" />
                    </div> 
                </div>

                <br><br><br>

                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Mensaje Enviado, Nos pondremos en contacto a la brevedad
                    </div>
                @endif
                @include('partials.errorMessages')

                {!! Form::open(['route'=>'contactStore', 'method'=>'POST', 'role'=>'form', 'class'=>'form-horizontal']) !!}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre*</label>
                        <div class="col-sm-10">
                            {!! Form::text('name',null,['class'=>'form-control', 'maxlength'=>'100', 'placeholder'=>'Nombre']) !!}
                        </div>
                    </div>  
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email*</label>
                        <div class="col-sm-10">
                            {!! Form::email('email',null,['class'=>'form-control', 'maxlength'=>'100', 'placeholder'=>'Email']) !!}
                        </div>
                    </div>  
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ciudad*</label>
                        <div class="col-sm-10">
                            {!! Form::text('city',null,['class'=>'form-control', 'maxlength'=>'100', 'placeholder'=>'Ciudad']) !!}
                        </div>
                    </div>  
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-10">
                            {!! Form::text('telephone',null,['class'=>'form-control', 'maxlength'=>'100', 'placeholder'=>'Teléfono']) !!}
                        </div>
                    </div>  
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Mensaje*</label>
                        <div class="col-sm-10">
                            {!! Form::textarea('content',null,['class'=>'form-control', 'maxlength'=>'1100', 'rows'=>'3', 'placeholder'=>'Cuéntanos la solución que requieres']) !!}
                        </div>
                    </div>  
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                {!! Form::close() !!}

            </div>    
            <div class="col-lg-2">
            </div>    
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
