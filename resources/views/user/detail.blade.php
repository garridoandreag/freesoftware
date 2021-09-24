@extends('layouts.app')

@section('content')

    @inject('roles','App\Services\Roles')
    @inject('branches','App\Services\Branches')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        Detalles del Usuario</h5>

                    <div class="card-body">
                        <form method="POST"
                            action="{{ isset($complaint) ? route('user.updateByAdmin') : route('register') }}">
                            @csrf

                            <fieldset disabled>
                                @if (isset($user) && is_object($user))
                                    <input type="hidden" name="id" value="{{ $user->id }}" /><br>
                                @endif

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ $user->name ?? '' }}" required autocomplete="name"
                                            autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Correo
                                        electrónico</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $user->email ?? '' }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="role_id" class="col-md-4 col-form-label text-md-right">Rol</label>
                                    <div class="col-md-6">
                                        <select id="role_id" name="role_id"
                                            class="form-control  @error('role_id') is-invalid @enderror">
                                            @foreach ($roles->get() as $index => $role)
                                                <option value="{{ $index }}"
                                                    {{ old('role_id', $user->role_id ?? '') == $index ? 'selected' : '' }}>
                                                    {{ $role }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="branch_id" class="col-md-4 col-form-label text-md-right">Sede</label>
                                    <div class="col-md-6">
                                        <select id="branch_id" name="branch_id"
                                            class="form-control  @error('branch_id') is-invalid @enderror">
                                            @foreach ($branches->get() as $index => $branch)
                                                <option value="{{ $index }}"
                                                    {{ old('branch_id', $user->branch_id ?? '') == $index ? 'selected' : '' }}>
                                                    {{ $branch }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                                    <div class="col-md-6">
                                        @if ($user->status > 0)
                                            <h5><span id="status{{ $user->id }}"
                                                    class="badge badge-pill badge-success">
                                                    ACTIVO
                                                </span></h5>
                                        @else
                                            <h5><span id="status{{ $user->id }}" class="badge badge-pill badge-danger">
                                                    INACTIVO
                                                </span></h5>
                                        @endif
                                    </div>
                                </div>

                            </fieldset>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('user.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                                    <a href="{{ route('user.edit', ['id' => $user->id]) }}"
                                        class="btn btn-primary">Editar</a>
                                    <a href="{{ route('user.destroy', ['id' => $user->id]) }}"
                                        class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
