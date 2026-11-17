<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | Sistema Odontológico</title>
    @vite(['resources/css/iniciar_sesion.css'])
</head>
<body class="login-page">
    <main class="login-card">
        <a class="brand" href="{{ url('/') }}" aria-label="Volver al inicio">
            <span class="brand-mark" aria-hidden="true">+</span>
            <span class="brand-copy">
                Sistema Odontológico
                <small>Gestión de pacientes y citas</small>
            </span>
        </a>

        <p class="login-eyebrow">Bienvenido</p>
        <h1>Iniciar sesión</h1>
        <p class="login-intro">Ingresa tus datos para continuar al sistema.</p>

        <form class="login-form" action="">
            <div class="form-field">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" autocomplete="username" required>
            </div>
            <div class="form-field">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" autocomplete="current-password" required>
            </div>
            <button class="button-primary" type="submit">Iniciar sesión</button>
        </form>

        <a class="back-link" href="{{ url('/') }}">Volver al inicio</a>
    </main>
</body>
</html>