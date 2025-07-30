<button class="btn text-white border border-white position-fixed top-0 end-0 m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
    <i class="bi bi-list fs-3"></i>
</button>

<!-- Menú lateral derecho tipo hamburguesa -->
<div class="offcanvas offcanvas-end offcanvas-mobile-75" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body menu-container">
        <p class="menu-container__rol">{{auth()->user()->role->name}}</p>
        <a href="{{route('dashboard')}}" class="menu-container__link">Home</a>
        <a href="{{ route('solicitudes') }}" class="menu-container__link">Solicitudes</a>
        @if(auth()->user()->role->name === 'Administrador')
            <p class="menu-container__title">ADMINISTRACION</p>
            <a href="{{ route('usuarios') }}" class="menu-container__link">Usuarios</a>
            <a href="{{ route('departamentos') }}" class="menu-container__link">Departamentos</a>
        @endif
        <!-- Bloque con datos del usuario -->
        <div class="menu-user">
            <!-- Foto, nombre y correo del usuario -->
            <div class="menu-user__datos">
                <img src="{{ asset('storage/images/icon-user.png') }}" alt="user" class="menu-user__icon">
                <div style="height: max-content; line-height: 0.4rem;">
                    <p class="menu-user__name">{{auth()->user()->name}}</p>
                    <p class="menu-user__email">{{auth()->user()->email}}</p>
                </div>
            </div>
            <div class="menu-user__logout">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="menu-user__logout"><i class="bi bi-box-arrow-right"></i></button>
                </form>
            </div>
        </div>
        
    </div>
</div>