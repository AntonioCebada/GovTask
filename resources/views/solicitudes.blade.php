<x-layouts.app title="Solicitudes">
    <x-slot name="header">
        <x-header/>
    </x-slot>
    <x-slot name="main">
        <div class="body">
            <!-- Encabezado de la pagina -->
            <div class="solicitudes-header">
                <div>
                    <h1 style="color: #1D2125; font-size: 1.8rem; font-weight: bold;">Solicitudes</h1>
                    <p style="color: #5A6168;">Gestiona todas las solicitudes del sistema</p>
                </div>
                <button class="solicitudes-header__button">
                    Nueva Solicitud
                </button>
            </div>

            <!-- Card de busqueda con filtros-->
            <div class="solicitudes-card-search">
                <input class="solicitudes-card-search__search-bar" type="text" placeholder="Buscar solicitudes...">
                <select class="solicitudes-card-search__select">
                    <option>Todos los estados</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="En Progreso">En Progreso</option>
                    <option value="Bloqueada">Bloqueada</option>
                    <option value="Finalizada">Finalizada</option>
                </select>

                <select class="solicitudes-card-search__select">
                    <option>Todas las prioridades</option>
                    <option value="Baja">Alta</option>
                    <option value="Media">Media</option>
                    <option value="Baja">Baja</option>
                </select>

                <button class="solicitudes-card-search__button">
                    Buscar
                </button>
            </div>

            <!-- Card donde se ve las solicitudes buscadas -->
            <div class="solicitudes-card-searched-request">
                <h2 style="font-weight: bold; margin-bottom: 0.5rem;">No se encontraron solicitudes</h2>
                <p style="color:rgb(10, 10, 11); margin-bottom: 1rem;">No hay solicitudes disponibles en este momento</p>
            </div>
        </div>
    </x-slot>
</x-layouts.app>
