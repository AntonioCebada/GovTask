<x-layouts.app title="Dashboard">
    <x-slot name="header">
        <x-header/>
    </x-slot>
    <x-slot name="main">
        <!-- Contenedor que ocupara el 100% de la pagina y estara por debajo del header -->
        <div class="body">
            <!-- Primer fila de 4 tarjetas -->
            <div class="dashboard-row dashboard-row--columns-4">
                <!-- Tarjeta para poder ver las solicitudes que estan pendientes -->
                <div class="dashboard-card">
                    <h2>Pendientes</h2>
                    <p style="font-size: 2rem; font-weight: bold;">0</p>
                </div>
                <!-- Tarjeta par apoder ver las solicitudes que estan en progreso -->
                <div class="dashboard-card">
                    <h2>En Progreso</h2>
                    <p style="font-size: 2rem; font-weight: bold; color: #17549b;">0</p>
                </div>
                <!-- Tarjeta par poder ver las solicitudes que estan de manera bloqueadas -->
                <div class="dashboard-card">
                    <h2>Bloqueadas</h2>
                    <p style="font-size: 2rem; font-weight: bold; color: red;">0</p>
                </div>
                <!-- Tarjeta para poder ver las solicitudes finalizadas -->
                <div class="dashboard-card">
                    <h2>Finalizadas</h2>
                    <p style="font-size: 2rem; font-weight: bold; color: green;">0</p>
                </div>
            </div>

            <!-- Segunda fila de 2 tarjetas -->
            <div class="dashboard-row dashboard-row--columns-2">
                <!-- solicitudes que son recientes -->
                <div class="dashboard-card">
                    <h2>Solicitudes Recientes</h2>
                    <p>No hay solicitudes recientes</p>
                </div>
                <div class="dashboard-card">
                    <h2>Solicitudes Urgentes</h2>
                    <p>No hay solicitudes urgentes</p>
                </div>
            </div>

            <!-- Tercer fila de 1 tarjeta -->
            <div class="dashboard-row dashboard-row--columns-1">
                <!-- aqui se empieza con las acciones rapidas, son las que se ven hasta abajo de la pagina -->
                <div class="dashboard-card">
                    <h2 style="margin-bottom: 1rem;">Acciones Rápidas</h2>
                    <div class="dashboard-card__quick-actions">
                        <a href="#">Nueva Solicitud</a>
                        <a href="#">Ver Kanban</a>
                        <a href="#">Gestionar Usuarios</a>
                        <a href="#">Departamentos</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.app>

