@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card border-primary mb-3">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        @if (isset($vendor) && is_object($vendor))
                            Modificar Proveedor
                        @else
                            Nueva Proveedor
                        @endif
                    </h5>

                    <div class="card-body">
                        <form method="POST"
                            action="{{ isset($vendor) ? route('vendor.update') : route('vendor.store') }}">
                            @csrf

                            @if (isset($vendor) && is_object($vendor))
                                <input type="hidden" name="id" value="{{ $vendor->id}}" /><br>
                            @endif
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre Comercial</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="Nombre Comercial" value="{{ $vendor->name ?? '' }}" required
                                        autocomplete="name" autofocus>

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
                                        name="registeredname" placeholder="Razón Social"
                                        value="{{ $vendor->registeredname ?? ''  }}" required autocomplete="registeredname"
                                        autofocus>

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
                                        name="nit" placeholder="Nit" value="{{ $vendor->nit ?? ''  }}" required
                                        autocomplete="nit" autofocus>

                                    @error('nit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="status" id="status"
                                        {{ old('status', $vendor->status ?? '') >= 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status">
                                            Activo
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('vendor.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enviar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
