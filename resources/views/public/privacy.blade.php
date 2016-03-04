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
                <h1>Política de Privacidad</h1>
                <h3>I. Responsable de la protección de sus datos personales</h3>
                <p>Este Aviso de Privacidad se pone a su disposición a fin de hacer de su conocimiento las prácticas que sigue Ultrafont Soluciones en Tecnología S.A. de C.V. al obtener, usar o almacenar su información personal, así como para dar cumplimiento a las disposiciones de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y su Reglamento (en lo sucesivo la "Ley").</p>
                <p>En Ultrafont Soluciones en Tecnología S.A. de C.V. estamos comprometidos con el derecho a la privacidad y el derecho a la autodeterminación informativa y procuramos cumplir en todo momento con los principios adoptados para el tratamiento de sus datos personales, como son, el de licitud, consentimiento, información, calidad, finalidad, lealtad, proporcionalidad y responsabilidad.</p>
                <h3>II. Seguridad y protección de los datos personales</h3>
                <p>Ultrafont Soluciones en Tecnología S.A. de C.V. está comprometida a salvaguardar la seguridad de sus datos personales, por lo que ha implementado diversas medidas de seguridad razonables (técnicas, físicas y administrativas) para procurar que sus datos personales estén seguros, así como restringidos y limitados a personal que requiera tener acceso a ellos, con el fin de proteger sus datos personales contra daño, pérdida, alteración, destrucción, uso, acceso o tratamiento no autorizado. En este sentido, Ultrafont Soluciones en Tecnología S.A. de C.V. usa los estándares de la industria para la protección de la confidencialidad de sus Datos Personales, incluyendo, entre otras medidas, cortafuegos ("firewalls").</p>
                <p>El usuario de Ultrafont Soluciones en Tecnología S.A. de C.V. conoce y acepta expresamente que Ultrafont Soluciones en Tecnología S.A. de C.V., a su exclusivo criterio, podrá recabar, almacenar y monitorear el intercambio de mensajes y correos electrónicos efectuado entre sus usuarios dentro de la comunidad de Ultrafont Soluciones en Tecnología S.A. de C.V., con el objetivo de contribuir a la seguridad de las relaciones y comunicaciones.</p>
                <p>En el mismo sentido, toda vez que Ultrafont Soluciones en Tecnología S.A. de C.V. transfiere bajo ciertas circunstancias sus datos personales a terceros (en estricto apego a lo establecido en el presente Aviso de Privacidad), los terceros proveedores de servicio y/o partes relacionadas con los que Ultrafont Soluciones en Tecnología S.A. de C.V. comparte sus datos personales (para el cumplimiento de las finalidades previstas en el presente Aviso de Privacidad), están comprometidos a respetar las mismas políticas y medidas de seguridad que Ultrafont Soluciones en Tecnología S.A. de C.V. ha implementado con relación al tratamiento de sus datos personales.</p>
                <p>Todos los Datos Personales de los usuarios serán almacenados en un fichero automatizado de datos personales. El fichero de Datos Personales de los usuarios de Ultrafont Soluciones en Tecnología S.A. de C.V. se encuentra en en la base de datos del servicio hosting. El usuario al inscribirse en Ultrafont Soluciones en Tecnología S.A. de C.V., reconoce que está informado respecto la ubicación y residencia de este fichero, por lo que autoriza esta transferencia internacional de sus datos.</p>
                <h3>III. Cambios al Aviso de Privacidad</h3>
                <p>Ultrafont Soluciones en Tecnología S.A. de C.V. se reserva el derecho a modificar el presente Aviso de Privacidad en cualquier momento, en cuyo caso le informaremos ya sea por correo electrónico o cualquier otro medio los cambios introducidos; la versión más reciente del presente Aviso de Privacidad estará disponible en nuestra página en Internet: www.UltraFont.com/privacy</p>
                <h3>IV. Encargado de Protección de datos personales</h3>
                <p>Las dudas o comentarios respecto al presente Aviso de Privacidad, así como el ejercicio de los Derechos ARCO que por ley le corresponden, deberán dirigirse a contacto@ultrafont.com</p>
                <h3>V. Consentimiento</h3>
                <p>Este documento es parte integrante de los Términos y Condiciones Generales de Ultrafont Soluciones en Tecnología S.A. de C.V.. Mediante la aceptación de los Términos y Condiciones Generales en el momento de la inscripción el usuario acepta las disposiciones aquí contenidas.</p>
                <p>Una vez puesto a su disposición el presente Aviso de Privacidad, y en caso de no manifestar su oposición al mismo, se entenderá que consiente el tratamiento de sus datos, y:</p>
                <p>a)   Acepta las condiciones contenidas en el presente Aviso de Privacidad;</p>
                <p>b)   Está de acuerdo en que la información proporcionada por usted pueda almacenarse, usarse y, en general, tratarse para los fines que se señalan, incluso para fines comerciales y de promoción; y</p>
                <p>c)   Otorga a Ultrafont Soluciones en Tecnología S.A. de C.V. autorización para obtener, compilar, almacenar, compartir, comunicar, transmitir y usar tal información de conformidad con las condiciones establecidas en el presente Aviso de Privacidad y las leyes aplicables.</p>
                <p>El presente Aviso de Privacidad se encuentra vigente desde el 11 de enero de 2016</p>
            </div>    
            <div class="col-lg-3"></div>
        </div>

        <footer>
            <p>
                &copy; 2016 Ultrafont Soluciones en Tecnología S.A. de C.V.
                &middot; <a href="http://www.github.com/ultrafont" target="_blank" >GitHub</a> 
                &middot; <a href="{{ route('privacy') }}">Privacidad</a>
            </p>
        </footer>
    </div><!-- /.container -->
@endsection
