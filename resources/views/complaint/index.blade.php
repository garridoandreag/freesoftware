@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary mb-3">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        {{ __('Quejas') }}
                    </h5>
                    <div class="card-body">

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
                                    <th scope="col">Título</th>
                                    <th scope="col">Proveedor</th>
                                    <th scope="col">Departamento</th>
                                    <th scope="col">Municipio</th>
                                    <th scope="col">Sucursal</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($complaints as $complaint)
                                    <tr>
                                        <td data-label="Título"><a href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                {{ $complaint->summary }}
                                            </a>
                                        </td>
                                        <td data-label="Proveedor"><a href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                {{ $complaint->vendor->name }}
                                            </a></td>
                                        <td data-label="Departamento"><a href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                {{ $complaint->department->name }}
                                            </a></td>
                                        <td data-label="Municipio"><a href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                {{ $complaint->town->name }}
                                            </a></td>
                                        <td data-label="Sucursal"><a href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                {{ $complaint->branchoffice->address }}
                                            </a></td>
                                        <td data-label="Estado">
                                            @if ($complaint->status == 0)
                                                <span id="status{{ $complaint->id }}" class="status badge badge-pill badge-danger">
                                                    INACTIVO
                                                </span>
                                            @endif
                                            @if ($complaint->status == 1)
                                                <span id="status{{ $complaint->id }}" class="status badge badge-pill badge-success">
                                                    ACTIVO
                                                </span>
                                            @endif
                                            @if ($complaint->status == 2)
                                                <span id="status{{ $complaint->id }}" class="status badge badge-pill badge-primary">
                                                    REVISADO
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
