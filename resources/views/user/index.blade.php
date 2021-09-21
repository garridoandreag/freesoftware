@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary mb-3">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        Usuarios
                    </h5>
                    <div class="card-body">

                        <div class="row justify-content-md-center">
                            <div class="col">
                                <a href="{{ route('user.register') }}" class="btn btn-success"><i
                                        class="bi bi-plus-circle"></i> Crear Usuario </a>
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
                                    <th>Email</th>
                                    <th>Sede</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td><a href="{{ route('user.detail', ['id' => $user->id]) }}">
                                                {{ $user->name }}
                                            </a>
                                        </td>
                                        <td><a href="{{ route('user.detail', ['id' => $user->id]) }}">
                                                {{ $user->email }}
                                            </a>
                                        </td>
                                        <td><a href="{{ route('user.detail', ['id' => $user->id]) }}">
                                                {{ $user->branch->name }}
                                            </a>
                                        </td>
                                        <td><a href="{{ route('user.detail', ['id' => $user->id]) }}">
                                                {{ $user->role->name }}
                                            </a>
                                        </td>
                                        <td>
                                            @if ($user->status == 0)
                                                <span id="status{{ $user->id }}"
                                                    class="status badge badge-pill badge-danger">
                                                    INACTIVO
                                                </span>
                                            @endif
                                            @if ($user->status == 1)
                                                <span id="status{{ $user->id }}"
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
