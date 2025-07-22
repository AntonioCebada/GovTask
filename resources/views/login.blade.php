<!-- Se inserta la plantilla para la página de login -->
<x-layouts.auth title="Login">
    <!-- Slot para los metas dinámicos -->
    <x-slot name="head">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Inconsolata:wght@200..900&family=Meow+Script&family=Miniver&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    </x-slot>

    <!-- Contenedor de todo el contenido -->
    <div class="login-container">
        <!-- Mitad roja -->
        <div class="login-container--red">
            <video id="animation-login" autoplay loop muted playsinline>
                <source src="{{ asset('storage/images/videos/login-animation.mp4') }}" type="video/mp4">
            </video>
        </div>
        <!-- Mitad blanca -->
        <div class="login-container--white">
            <span class="login-form__label">Login</span>
            <form action="" method="post" style="display: flex; flex-direction: column; align-items: center;">
                <div class="login-form__input">
                    <input type="text" name="email" placeholder="Correo Electronico" class="login-form__input--float">
                    <i class="bi bi-person"></i>
                </div>
                <div class="login-form__input">
                    <input type="password" name="password" placeholder="Contraseña" class="login-form__input--float">
                    <i class="bi bi-lock"></i>
                </div>
                <button type="submit" class="login-form__button">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <x-slot name="scripts">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    </x-slot>
</x-layouts.auth>