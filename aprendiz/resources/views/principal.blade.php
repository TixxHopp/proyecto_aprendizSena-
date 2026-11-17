<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión Odontológica</title>
    @vite(['resources/css/estilosPlantilla.css'])
</head>
<body class="home-page">
    <div class="site-shell">
        <header class="site-header">
            <a class="brand" href="{{ url('/') }}" aria-label="Sistema de Gestión Odontológica, inicio">
                <span class="brand-mark" aria-hidden="true">+</span>
                <span class="brand-copy">
                    Sistema Odontológico
                    <small>Gestión de pacientes y citas</small>
                </span>
            </a>
            <nav class="main-nav" aria-label="Navegación principal">
                <a href="{{ url('/') }}">Inicio</a>
                <a href="">Asignar</a>
                <a href="">Consultar cita</a>
                <a href="">Cancelar cita</a>
                <a class="nav-cta" href="{{ route('iniciar.sesion') }}">Iniciar sesión</a>
            </nav>
        </header>

        <main>
            <section class="hero" aria-labelledby="hero-title">
                <div class="hero-copy">
                    <p class="eyebrow">ATENCIÓN ODONTOLÓGICA</p>
                    <h1 id="hero-title">Una sonrisa saludable empieza aquí.</h1>
                    <p class="hero-description">
                        Administra la información de pacientes, tratamientos y citas desde un solo lugar.
                    </p>
                    <a class="button-primary" href="{{ route('iniciar.sesion') }}">Acceder al sistema</a>
                </div>
            </section>

            <section class="services" aria-labelledby="services-title">
                <div class="section-heading">
                    <p class="eyebrow">GESTIÓN SIMPLE</p>
                    <h2 id="services-title">Todo lo que necesitas, más organizado</h2>
                    <p>El sistema cuenta con herramientas para administrar las citas odontológicas.</p>
                </div>
                <div class="service-grid">
                    <article class="service-card">
                        <span class="service-number">01</span>
                        <h3>Asignar cita</h3>
                        <p>Organiza las próximas citas de tus pacientes.</p>
                    </article>
                    <article class="service-card">
                        <span class="service-number">02</span>
                        <h3>Consultar cita</h3>
                        <p>Encuentra la información de una cita fácilmente.</p>
                    </article>
                    <article class="service-card">
                        <span class="service-number">03</span>
                        <h3>Cancelar cita</h3>
                        <p>Gestiona cambios en la agenda de atención.</p>
                    </article>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            Sistema de Gestión Odontológica
        </footer>
    </div>
</body>
</html>