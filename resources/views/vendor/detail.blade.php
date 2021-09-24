@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card border-primary mb-3">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        Detalles del Proveedor
                    </h5>

                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <fieldset disabled>
                                @if (isset($vendor) && is_object($vendor))
                                    <input type="hidden" name="id" value="{{ $vendor->id }}" /><br>
                                @endif

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre Comercial</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ $vendor->name }}" required autocomplete="name"
                                            autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="registeredname" class="col-md-4 col-form-label text-md-right">Razón
                                        Social</label>

                                    <div class="col-md-6">
                                        <input id="registeredname" type="text"
                                            class="form-control @error('registeredname') is-invalid @enderror"
                                            name="registeredname" value="{{ $vendor->registeredname }}" required
                                            autocomplete="registeredname" autofocus>

                                        @error('registeredname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nit" class="col-md-4 col-form-label text-md-right">Nit</label>

                                    <div class="col-md-6">
                                        <input id="nit" type="text" class="form-control @error('nit') is-invalid @enderror"
                                            name="nit" value="{{ $vendor->nit }}" required autocomplete="nit" autofocus>

                                        @error('nit')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                                    <div class="col-md-6">
                                        @if ($vendor->status > 0)
                                            <h5><span id="status{{ $vendor->id }}" class="badge badge-pill badge-success">
                                                    ACTIVO
                                                </span></h5>
                                        @else
                                            <h5><span id="status{{ $vendor->id }}" class="badge badge-pill badge-danger">
                                                    INACTIVO
                                                </span></h5>
                                        @endif
                                    </div>
                                </div>

                            </fieldset>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('vendor.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                                    @auth
                                        <a href="{{ route('vendor.edit', ['id' => $vendor->id]) }}"
                                            class="btn btn-primary">Editar</a>
                                    @endauth
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
