<!-- Componente para el header -->
<div class="header-container">
    <!-- Contenedor con el logo -->
    <div>
        <a href="{{route('dashboard')}}" class="header-container__link">
            <img src="{{ asset('storage/images/logo-white.png') }}" alt="logo" class="header-container__logo">
            ovTask
        </a>
    </div>

    <!-- Contenedor con el nombre del usuario  -->
    <div>
        <!-- Botón de menú hamburguesa -->
        <x-menu/>
    </div>
</div>