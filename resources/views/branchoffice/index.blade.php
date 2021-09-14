@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary mb-3">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        Sucursales
                    </h5>
                    <div class="card-body">

                        <div class="row justify-content-md-center">
                            <div class="col">
                                <a href="{{ route('branchoffice.create') }}" class="btn btn-success"><i class="bi bi-plus-circle"></i> Crear Sucursal</a>
                            </div>
                        </div>
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

                        <table id="example" class="table table-hover " style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Zona</th>
                                    <th>Direccion</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($branchoffices as $branchoffice)
                                    <tr>
                                        <td><a href="{{ route('branchoffice.detail', ['id' => $branchoffice->id]) }}">
                                                {{ $branchoffice->name }}
                                            </a>
                                        </td>
                                        <td><a href="{{ route('branchoffice.detail', ['id' => $branchoffice->id]) }}">
                                           
                                            {{ $branchoffice->town->name }}
                                            </a>
                                        </td>
                                        <td><a href="{{ route('branchoffice.detail', ['id' => $branchoffice->id]) }}">
                                                {{ $branchoffice->address }}
                                            </a>
                                        </td>
                                        <td>
                                            @if ($branchoffice->status == 0)
                                                <span id="status{{ $branchoffice->id }}"
                                                    class="status badge badge-pill badge-danger">
                                                    INACTIVO
                                                </span>
                                            @endif
                                            @if ($branchoffice->status == 1)
                                                <span id="status{{ $branchoffice->id }}"
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
