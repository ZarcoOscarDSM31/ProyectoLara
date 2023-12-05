<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de oficios y profesiones</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

</head>
<body>
    <nav>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="logo" width="80px" height="80px">
            </div>
            <div class="nav-links">
                <a class="nav-link" href="#Inicio">INICIO</a></li>
                <a class="nav-link" href="{{ route('login') }}">INICIAR SESION</a></li>
                <a class="nav-link" href="{{ route('register') }}">REGISTRARSE</a></li>
                <!-- Puedes añadir más enlaces según tus necesidades -->
            </div>
        </div>
    </nav>

    <div class="container">

    <div class="container">
        <h1>Tu solución, nuestros servicios: ¡Convierte tus necesidades en realidad!</h1>

    </div>

        <div class="card-container">

          <!-- Sección de ¿Quiénes somos? -->
          <section id="quienesSomos">
            <div class="auth-sections">
                <h2 class="section-heading text-uppercase">¿Quiénes somos?</h2>
                <p>Somos una empresa dedicada a proporcionar soluciones y servicios para satisfacer tus necesidades. Nos esforzamos por ofrecer la mejor calidad y atención a nuestros clientes.</p>
            </div>
            <div class="quienes-somos-image">
                <img src="{{ asset('images/logo.jpg') }}" alt="imagen-ejemplo" width="30%" height="auto">
            </div>
        </section>


            <section id="Inicio">
            <div class="auth-section">
                <h2 class="section-heading text-uppercase">SERVICIOS</h2>
            </div>
                <div class="row text-center card-row">
                    <div class="card">
                        <img src="{{ asset('images/usuario.png') }}" alt="...">
                        <h2>Informacion de Contacto</h2>
                        <p>Ofrece informacion de contacto de nuestros proveedores de servicios.</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/servicios.png') }}" alt="...">
                        <h2>Servicos</h2>
                        <p>Te ofrecemos todo tipo de servicios como profesionales y de oficio</p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/citas.png') }}" alt="...">
                        <h2>Citas</h2>
                        <p>Agendar citas con el proveedor para realizar el servicio que se requiera</p>
                    </div>
                </div>
            </section>
            <div class="auth-sections">
                <h2>Iniciar Sesión o Registrarse</h2>
                <p>¡Únete a nosotros para acceder a más servicios!</p>
                <a href="{{ route('login') }}">Iniciar Sesión</a>
                <a href="{{ route('register') }}">Registrarse</a>
            </div>
            </div>

            <section id="galeria">
    <h2 class="col">Oficios y Profesiones</h2>
    <div class="galeria-container">
        <img src="{{ asset('images/abogado.jpg') }}" alt="imagen1" class="galeria-img">
        <img src="{{ asset('images/doctor.jpg') }}" alt="imagen2" class="galeria-img">
        <img src="{{ asset('images/veterinaria.jpg') }}" alt="imagen3" class="galeria-img">
        <img src="{{ asset('images/albañil.jpg') }}" alt="imagen4" class="galeria-img">
    </div>
</section>
      </body>
</html>
