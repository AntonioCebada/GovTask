<x-layouts.app title="Solicitudes">
    <x-slot name="header">
        <x-header/>
    </x-slot>

    <x-slot name="main">
        <div class="content-body">
            <x-menu/>

            <div class="content-body__content">

                <!-- Encabezado de la pagina -->
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                    <div>
                        <h1 style="font-size: 1.8rem; font-weight: bold;">Gestion de Usuarios</h1>
                        <p style="color: #5A6168;">Administra los usuarios del sistema y sus Roles</p>
                    </div>
                    <a href="#" style="text-decoration: none; background: #17549b; color: white;
                                       padding: 0.6rem 1.5rem; border-radius: 0.8rem;">
                        Nuevo Usuario
                    </a>
                </div>

                <!-- aqui es en donde se ven los menus desplegables -->
                <div style="border: 1px solid #000; border-radius: 0.8rem; padding: 1rem; margin-bottom: 2rem;
                            display: flex; gap: 1rem; flex-wrap: wrap;">
                    <input type="text" placeholder="Buscar usuarios..."
                           style="flex: 1; padding: 0.5rem 1rem; border-radius: 0.5rem; border: 1px solid #000;">
                    <select style="flex: 1; padding: 0.5rem 1rem; border-radius: 0.5rem; border: 1px solid #000;">
                        <option>Todos los roles</option>
                        <option value="Administradores">Administradores</option>
                        <option value="Visualizadores">Visualizadores</option>
                    </select>

                    <button style="background: white; border: 1px solid #17549b; color: #17549b;
                                   padding: 0.5rem 1rem; border-radius: 0.5rem;">
                        Limpiar Filtros
                    </button>
                </div>


                <!-- es en donde se ve la caja en donde se ven los usuarios que estan dentro de nuestro sistema y el total de los mismos -->
                <div style="border: 1px solid #000; border-radius: 0.8rem; padding: 2rem; text-align: center;">
                    <h2 style="font-weight: bold; margin-bottom: 0.5rem;">Usuarios del Sistema</h2>
                    <p style="color:rgb(10, 10, 11); margin-bottom: 1rem;">Total de Usuarios</p>
                </div>

            </div>
        </div>

        <!-- Formulario temporal para registro -->
        <form action="{{route('login')}}" method="POST" style="display: flex; flex-direction: column; align-items: center;">
                @csrf
                <div class="login-form__input">
                    <input type="text" name="name" placeholder="Nombre del ususario..." class="login-form__input--float" required>
                    <input type="email" name="email" placeholder="Correo Electronico" class="login-form__input--float" required>
                </div>
                <div class="login-form__input">
                    <input type="password" name="password" placeholder="Contraseña" class="login-form__input--float" required>
                    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" class="login-form__input--float" required>
                    <i class="bi bi-lock"></i>
                </div> <br>

                <select name="role_id" required>
                    <option value="">Selecciona un rol</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                    @endforeach
                </select><br>
                <button type="submit" class="login-form__button">Registrar</button>
            </form>
    </x-slot>
</x-layouts.app>