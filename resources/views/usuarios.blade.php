<x-layouts.app title="Solicitudes">
    <x-slot name="header">
        <x-header/>
    </x-slot>

    <x-slot name="main">
        <div class="body">
            <!-- Encabezado de la pagina -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                <div>
                    <h1 style="font-size: 1.8rem; font-weight: bold;">Gestion de Usuarios</h1>
                    <p style="color: #5A6168;">Administra los usuarios del sistema y sus Roles</p>
                </div>
                <!-- Menu desplegable para registrar un nuevo usuario -->
                <button class="usuarios-newuser" data-bs-toggle="modal" data-bs-target="#formModal">
                    Nuevo usuario
                </button>
                <!-- Modal para registrar un nuevo usuario -->
                <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Nuevo Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('usuarios')}}" method="POST" class="usuarios-newuser__modal">
                                @csrf
                                <div style="display:flex; flex-direction:column; width: 100%;">
                                    <h7>Nombre del Usuario</h7>
                                    <input type="text" name="name" placeholder="Nombre del ususario..." class="usuarios-newuser__input" required>
                                </div>
                                <div style="display:flex; flex-direction:column; width: 100%;">
                                    <h7>Correo Electronico</h7>
                                    <input type="email" name="email" placeholder="Correo Electronico" class="usuarios-newuser__input" required>
                                </div>
                                <div style="display:flex; flex-direction:column; width: 100%;">
                                    <h7>Contraseña</h7>
                                    <input type="password" name="password" placeholder="Contraseña" class="usuarios-newuser__input" required>
                                </div>
                                <div style="display:flex; flex-direction:column; width: 100%;">
                                    <h7>Confirmar Contraseña</h7>
                                    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" class="usuarios-newuser__input" required>
                                </div>
                                <div style="display:flex; flex-direction:column; width: 100%;">
                                    <h7>Seleccionar un rol</h7>
                                    <select name="role_id" class="usuarios-newuser__input" required>
                                        <option value="">Selecciona un rol</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card de busqueda con filtros-->
            <div class="usuarios-card-search">
                <input type="text" placeholder="Buscar usuarios..." class="usuarios-card-search__searchbar">
                <select class="usuarios-card-search__select">
                    <option>Todos los roles</option>
                    <option value="Administradores">Administradores</option>
                    <option value="Visualizadores">Visualizadores</option>
                </select>
                <button class="usuarios-card-search__button">
                    Limpiar Filtros
                </button>
            </div>


            <!-- es en donde se ve la caja en donde se ven los usuarios que estan dentro de nuestro sistema y el total de los mismos -->
            <div class="usuarios-card-users">
                @foreach($users as $user)
                <div class="usuarios-card-users__users">
                    <img src="{{ asset('storage/images/icon-user.png') }}" alt="user" class="usuarios-user__image">
                    <div class="usuarios-user__datos">
                        <div class="usuarios-user__nombre">{{$user->name}}</div>
                        <div>{{$user->email}}</div>
                    </div>
                    <div class="usuarios-user__options">
                        <!-- Botón para eliminar el usuario -->
                        <form action="{{ route('usuarios.eliminar', $user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="usuarios-user__options--delete" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </form>
                        <!-- Botón para modificar el usuario -->
                        <button class="usuarios-user__options--modify" data-bs-toggle="modal" data-bs-target="#editarUsuarioModal{{ $user->id }}">
                            <i class="bi bi-pencil-square"></i>
                        </button>

                        <!-- Modal Bootstrap -->
                        <div class="modal fade" id="editarUsuarioModal{{ $user->id }}" tabindex="-1" aria-labelledby="editarUsuarioModalLabel{{ $user->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <form action="{{ route('usuarios.actualizar', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                <h5 class="modal-title" id="editarUsuarioModalLabel{{ $user->id }}">Editar Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body">
                                <div class="mb-3">
                                    <label>Nombre</label>
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label>Correo</label>
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                                </div>
                                <div class="mb-3">
                                    <label>Contraseña (dejar en blanco si no se cambia)</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Rol</label>
                                    <select name="role_id" class="form-control" required>
                                    @foreach($roles as $rol)
                                        <option value="{{ $rol->id }}" {{ $user->role_id == $rol->id ? 'selected' : '' }}>
                                        {{ ucfirst($rol->name) }}
                                        </option>
                                    @endforeach
                                    </select>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </x-slot>
</x-layouts.app>