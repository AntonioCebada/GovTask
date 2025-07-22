<button class="btn text-white border border-white position-fixed top-0 end-0 m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
    <i class="bi bi-list fs-3"></i>
</button>

<!-- Menú lateral derecho tipo hamburguesa -->
<div class="offcanvas offcanvas-end offcanvas-mobile-75" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body menu-container">
        <p class="menu-container__rol">Rol</p>
        <a href="{{route('dashboard')}}" class="menu-container__link">Home</a>
        <a href="{{ route('solicitudes') }}" class="menu-container__link">Solicitudes</a>
        <a href="{{ route('tablero') }}" class="menu-container__link">Tablero Kanban</a>
        <p class="menu-container__title">ADMINISTRACION</p>
        <a href="{{ route('usuarios') }}" class="menu-container__link">Usuarios</a>
        <a href="{{ route('departamentos') }}" class="menu-container__link">Departamentos</a>
    </div>
</div>