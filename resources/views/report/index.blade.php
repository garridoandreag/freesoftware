@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary mb-3">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        Reportes
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

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Reporte</th>
                                    <th scope="col" colspan="4">Parámetros</th>
                                    <th scope="col">Descargar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <form id="reportallForm" method="POST" action="{{ route('report.complaintsByDate') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <td colspan="2">
                                            Quejas emitidas en un rango de fechas
                                        </td>
                                        <td colspan="2">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">De</span>
                                                </div>
                                                <input id="startDate" type="date"
                                                    class="form-control @error('startDate') is-invalid @enderror"
                                                    name="startDate" autocomplete="startDate" autofocus>
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Hasta</span>
                                                </div>
                                                <input id="endDate" type="date"
                                                    class="form-control @error('endDate') is-invalid @enderror"
                                                    name="endDate" autocomplete="endDate" autofocus>
                                            </div>
                                        </td>
                                        <td scope="row">
                                            <center>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="bi bi-printer"></i>
                                                </button>
                                            </center>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <form id="regionForm" method="POST"
                                        action="{{ route('report.complaintsByDateRegion') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <td colspan="2"> 
                                            Quejas emitidas en un rango de fechas por Region
                                        </td>
                                        <td colspan="2">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">De</span>
                                                </div>
                                                <input id="startDate" type="date"
                                                    class="form-control @error('startDate') is-invalid @enderror"
                                                    name="startDate" autocomplete="startDate" autofocus>
                                            </div>
                                            <br>
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Hasta</span>
                                                </div>
                                                <input id="endDate" type="date"
                                                    class="form-control @error('endDate') is-invalid @enderror"
                                                    name="endDate" autocomplete="endDate" autofocus>
                                            </div>

                                        </td>
                                        <td colspan="2">
                                            <div class="mb-3">
                                                <div class="input-group is-invalid">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="region">Region</label>
                                                    </div>
                                                    <select multiple="multiple" class="form-control" id="region_id[]"
                                                        name="region_id[]">
                                                        @foreach ($regions as $index => $region)
                                                            <option value="{{ $index }}">
                                                                {{ $region }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td scope="row">
                                            <center>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="bi bi-printer"></i>
                                                </button>
                                            </center>
                                        </td>
                                    </form>
                                </tr>
                                <tr>
                                    <form id="departmentForm" method="POST"
                                        action="{{ route('report.complaintsByDateDepartment') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <td colspan="2">
                                            Quejas emitidas en un rango de fechas por departamento
                                        </td>
                                        <td colspan="2">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">De</span>
                                                </div>
                                                <input id="startDate" type="date"
                                                    class="form-control @error('startDate') is-invalid @enderror"
                                                    name="startDate" autocomplete="startDate" autofocus>
                                            </div>
                                            <br>
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Hasta</span>
                                                </div>
                                                <input id="endDate" type="date"
                                                    class="form-control @error('endDate') is-invalid @enderror"
                                                    name="endDate" autocomplete="endDate" autofocus>
                                            </div>

                                        </td>
                                        <td colspan="2">
                                            <div class="mb-3">
                                                <div class="input-group is-invalid">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="department">Departamento</label>
                                                    </div>
                                                    <select multiple="multiple" class="form-control" id="department_id[]"
                                                        name="department_id[]">
                                                        @foreach ($departments as $index => $department)
                                                            <option value="{{ $index }}">
                                                                {{ $department }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td scope="row">
                                            <center>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="bi bi-printer"></i>
                                                </button>
                                            </center>
                                        </td>
                                    </form>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
