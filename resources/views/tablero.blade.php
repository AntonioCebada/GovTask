<x-layouts.app title="Tablero de Solicitudes">
    <x-slot name="header">
        <x-header/>
    </x-slot>

    <x-slot name="main">
        <div class="content-body">
            <x-menu/>

            <div class="content-body__content">

                <!-- Este solamente es el encabezado de la pagina -->
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                    <div>
                        <h1 style="font-size: 1.8rem; font-weight: bold;">Tablero Kanban o de Solicitudes</h1>
                        <p style="color: #5A6168;">Gestiona el flujo de trabajo de las solicitudes</p>
                    </div>
                    <div style="display: flex; gap: 1rem;">
                        <select style="padding: 0.5rem 1rem; border-radius: 0.5rem; border: 1px solid #ccc;">
                            <option>Todas las Solicitudes</option>
                        </select>
                        <a href="#" style="text-decoration: none; background: #17549b; color: white;
                                           padding: 0.6rem 1.5rem; border-radius: 0.8rem;">
                            Nueva Solicitud
                        </a>
                    </div>
                </div>

                <!-- Tablero Kanban -->
                <div style="border: 1px solid #ddd; border-radius: 0.8rem; padding: 1rem;">
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <!-- Columna Pendiente -->
                        <div style="flex: 1; min-width: 200px; background: #f9f9f9; border-radius: 0.5rem; padding: 1rem;">
                            <h3 style="font-weight: bold; color: #5A6168;">
                                <span style="color: #6c757d;">●</span> Pendiente (0)
                            </h3>
                            <p style="color: #999; margin-top: 1rem;">No hay solicitudes</p>
                        </div>

                        <!-- Columna En Progreso -->
                        <div style="flex: 1; min-width: 200px; background: #eef5ff; border-radius: 0.5rem; padding: 1rem;">
                            <h3 style="font-weight: bold; color: #5A6168;">
                                <span style="color: #17549b;">●</span> En Progreso (0)
                            </h3>
                            <p style="color: #999; margin-top: 1rem;">No hay solicitudes</p>
                        </div>

                        <!-- Columna Bloqueada -->
                        <div style="flex: 1; min-width: 200px; background: #fff1f1; border-radius: 0.5rem; padding: 1rem;">
                            <h3 style="font-weight: bold; color: #5A6168;">
                                <span style="color: #e74c3c;">●</span> Bloqueada (0)
                            </h3>
                            <p style="color: #999; margin-top: 1rem;">No hay solicitudes</p>
                        </div>

                        <!-- Columna Finalizada -->
                        <div style="flex: 1; min-width: 200px; background: #f0fff0; border-radius: 0.5rem; padding: 1rem;">
                            <h3 style="font-weight: bold; color: #5A6168;">
                                <span style="color: #2ecc71;">●</span> Finalizada (0)
                            </h3>
                            <p style="color: #999; margin-top: 1rem;">No hay solicitudes</p>
                        </div>
                    </div>

                    <div style="text-align: right; margin-top: 1rem; color: #5A6168;">
                        Total: 0 Solicitudes
                    </div>
                </div>

                <!-- Esta es la leyenda en donde se muestran las prioridades como lo pusimos en el word -->
                <div style="display: flex; justify-content: space-between; align-items: center; 
                            border: 1px solid #ddd; border-radius: 0.8rem; padding: 0.8rem; margin-top: 2rem;">
                    <div style="display: flex; gap: 1rem;">
                        <div><span style="color: #e74c3c;">●</span> Alta Prioridad</div>
                        <div><span style="color: #f1c40f;">●</span> Media Prioridad</div>
                        <div><span style="color: #2ecc71;">●</span> Baja Prioridad</div>
                    </div>
                    <div style="font-size: 0.9rem; color: #5A6168;">
                        Arrastra las tarjetas para cambiar el estado de las solicitudes
                    </div>
                </div>

            </div>
        </div>
    </x-slot>
</x-layouts.app>