@extends('layouts.app')

@section('content')
    @inject('vendors','App\Services\Vendors')
    @inject('departments','App\Services\Departments')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card border-primary mb-3">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        Detalle de la Sucursal
                    </h5>

                    <div class="card-body">
                        <form method="POST"
                            action="{{ isset($branchoffice) ? route('branchoffice.update') : route('branchoffice.store') }}">
                            @csrf

                            @if (isset($branchoffice) && is_object($branchoffice))
                                <input type="hidden" name="id" value="{{ $branchoffice->id }}" /><br>
                            @endif

                            <fieldset disabled>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="Nombre" value="{{ $branchoffice->name ?? '' }}" required
                                        autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vendor_id" class="col-md-4 col-form-label text-md-right">Proveedor</label>

                                <div class="col-md-6">
                                    <select id="vendor" name="vendor_id"
                                        class="form-control  @error('vendor_id') is-invalid @enderror">
                                            <option value="{{ $branchoffice->vendor_id }}">
                                                {{ $branchoffice->vendor->name }}
                                            </option>
                                    </select>

                                    @error('summary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="department_id"
                                    class="col-md-4 col-form-label text-md-right">Departamento</label>

                                <div class="col-md-6">
                                    <select id="department" name="department_id"
                                        class="form-control  @error('department_id') is-invalid @enderror">
                                        <option value="{{ $branchoffice->department_id }}">
                                            {{ $branchoffice->town->department->name }}
                                        </option>
                                    </select>

                                    @error('summary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="town_id" class="col-md-4 col-form-label text-md-right">Municipio</label>

                                <div class="col-md-6">
                                    <select id="town" name="town_id"
                                        class="form-control  @error('town_id') is-invalid @enderror">
                                        <option value="{{ $branchoffice->town_id }}">{{ $branchoffice->town->name }}
                                        </option>
                                        @error('town_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zone" class="col-md-4 col-form-label text-md-right">Zona</label>

                                <div class="col-md-6">
                                    <input id="zone" type="number" step="any" min="0" max="25"
                                        class="form-control @error('zone') is-invalid @enderror" name="zone"
                                        placeholder="Zona" value="{{ $branchoffice->zone ?? '' }}" required
                                        autocomplete="nit" autofocus>

                                    @error('nit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Dirección</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        placeholder="Dirección" value="{{ $branchoffice->address ?? '' }}" required
                                        autocomplete="address" autofocus>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="addnit" id="addnit"
                                            onchange="javascript:showContent()"
                                            {{ old('addnit', $branchoffice->addnit ?? '') >= 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="addnit">
                                            Nit independiente
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" id="nitdiv" style="display: none;">
                                <label for="nit" class="col-md-4 col-form-label text-md-right">Nit</label>

                                <div class="col-md-6">
                                    <input id="nit" type="text" class="form-control @error('nit') is-invalid @enderror"
                                        name="nit" placeholder="Nit" value="{{ $branchoffice->nit ?? '' }}" required
                                        autocomplete="nit" autofocus>

                                    @error('nit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            @if (isset($branchoffice))
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="status" id="status"
                                                {{ old('status', $branchoffice->status ?? '') >= 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="status">
                                                Activo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            </fieldset>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('branchoffice.index') }}"
                                        class="btn btn-outline-secondary">Cancelar</a>
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
    <script>
        function showContent() {
            element = document.getElementById("nitdiv");
            check = document.getElementById("addnit");
            if (check.checked) {
                element.style.display = '';
            } else {
                element.style.display = 'none';
            }
        }

        $(document).ready(function() {
            $("#department").on('change', function() {

                var department_id = $(this).val();
                console.log("Department cambio valor: " + department_id);

                if (department_id) {
                    $.ajax({
                        url: '/town/get/' + department_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {

                            console.log("trayendo valores de town");

                            $("#town").empty();
                            $("#town").append(
                                '<option value="">Seleccione un municipio</option>');

                            $.each(data, function(key, value) {
                                $("#town").append(
                                    '<option value="' + key + '">' + value +
                                    '</option>');
                            });

                        }
                    });
                } else {
                    $("#town").empty();
                }

            });

        });
    </script>
@endsection
