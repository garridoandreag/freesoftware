@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card border-primary mb-3">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        Detalles de la Categoría
                    </h5>

                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <fieldset disabled>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name"  value="{{ $category->name }}" required
                                        autocomplete="name" autofocus>

                                    @error('name')
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
                                    @if ($category->status > 0)
                                        <h5><span id="status{{ $category->id }}"
                                                class="badge badge-pill badge-success">
                                                ACTIVO
                                            </span></h5>
                                    @else
                                    <h5><span id="status{{ $category->id }}"
                                        class="badge badge-pill badge-danger">
                                        INACTIVO
                                    </span></h5>
                                    @endif
                                </div>
                            </div>

                            </fieldset>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('category.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                                    <a href="{{ route('category.edit',['id' => $category->id])}}" class="btn btn-primary">Editar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
