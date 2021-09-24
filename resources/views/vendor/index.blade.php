@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary mb-3">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        Proveedores
                    </h5>
                    <div class="card-body">

                        @auth
                        <div class="row justify-content-md-center">
                            <div class="col">
                                <a href="{{ route('vendor.create') }}" class="btn btn-success"><i class="bi bi-plus-circle"></i> Crear Proveedor </a>
                            </div>
                        </div>
                        @endauth
                        <br>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-danger">
                                {{ session('warning') }}
                            </div>
                        @endif

                        <table id="example" class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre Comercial</th>
                                    <th scope="col">Razón Social</th>
                                    <th scope="col">Nit</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vendors as $vendor)
                                    <tr>
                                        <td data-label="Nombre Comercial"><a href="{{ route('vendor.detail', ['id' => $vendor->id]) }}">
                                                {{ $vendor->name }}
                                            </a>
                                        </td>
                                        <td data-label="Razón Social"><a href="{{ route('vendor.detail', ['id' => $vendor->id]) }}">
                                                {{ $vendor->registeredname }}
                                            </a>
                                        </td>
                                        <td data-label="Nit"><a href="{{ route('vendor.detail', ['id' => $vendor->id]) }}">
                                                {{ $vendor->nit }}
                                            </a>
                                        </td>
                                        <td data-label="Estado">
                                            @if ($vendor->status == 0)
                                                <span id="status{{ $vendor->id }}"
                                                    class="status badge badge-pill badge-danger">
                                                    INACTIVO
                                                </span>
                                            @endif
                                            @if ($vendor->status == 1)
                                                <span id="status{{ $vendor->id }}"
                                                    class="status badge badge-pill badge-success">
                                                    ACTIVO
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
