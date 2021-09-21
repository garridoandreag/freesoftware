@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card border-primary mb-3">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        @if (isset($category) && is_object($category))
                            Modificar Categoría
                        @else
                            Nueva Categoría
                        @endif
                    </h5>

                    <div class="card-body">
                        <form method="POST"
                            action="{{ isset($category) ? route('category.update') : route('category.store') }}">
                            @csrf

                            @if (isset($category) && is_object($category))
                                <input type="hidden" name="id" value="{{ $category->id }}" /><br>
                            @endif
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="Nombre de la categoría" value="{{ $category->name ?? '' }}"
                                        required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            @if (isset($category) && is_object($category))
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="status" id="status"
                                                {{ old('status', $category->status ?? '') >= 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="status">
                                                Activo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('category.index') }}" class="btn btn-outline-secondary">Cancelar</a>
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
