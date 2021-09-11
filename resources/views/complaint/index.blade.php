@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-primary mb-3">
                    <div class="card-header"
                        style="background-image: linear-gradient( 135deg, #ABDCFF 10%, #0396FF 100%);">
                        {{ __('Quejas') }}
                    </div>
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


                        <table id="example" class="table table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Proveedor</th>
                                    <th>Departamento</th>
                                    <th>Municipio</th>
                                    <th>Sucursal</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($complaints as $complaint)
                                    <tr>
                                        <td><a href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                {{ $complaint->summary }}
                                            </a>
                                        </td>
                                        <td><a href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                {{ $complaint->description }}
                                            </a>
                                        </td>
                                        <td><a href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                {{ $complaint->vendor->name }}
                                            </a></td>
                                        <td><a href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                {{ $complaint->department->name }}
                                            </a></td>
                                        <td><a href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                {{ $complaint->town->name }}
                                            </a></td>
                                        <td><a href="{{ route('complaint.detail', ['id' => $complaint->id]) }}">
                                                {{ $complaint->branchoffice->address }}
                                            </a></td>
                                        <td>
                                            @if ($complaint->status == 0)
                                                <span id="status{{ $complaint->id }}" class="status badge badge-danger">
                                                    INACTIVO
                                                </span>
                                            @endif
                                            @if ($complaint->status == 1)
                                                <span id="status{{ $complaint->id }}" class="status badge badge-success">
                                                    ACTIVO
                                                </span>
                                            @endif
                                            @if ($complaint->status == 2)
                                                <span id="status{{ $complaint->id }}" class="status badge badge-primary">
                                                    REVISADO
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Proveedor</th>
                                    <th>Departamento</th>
                                    <th>Municipio</th>
                                    <th>Sucursal</th>
                                    <th>Estado</th>
                                </tr>
                            </tfoot>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
