@extends('layouts.app')

@section('content')
    @inject('vendors','App\Services\Vendors')
    @inject('statuses','App\Services\Statuses')
    @inject('categories','App\Services\Categories')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card border-primary mb-3">
                    <h5 class="card-header"
                        style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        @if (isset($complaint) && is_object($complaint))
                            Revisión de Queja
                        @else
                            Nueva Queja
                        @endif
                    </h5>

                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('complaint.reviewUpdate') }}">
                            @csrf

                            @if (isset($complaint) && is_object($complaint))
                                <input type="hidden" name="id" value="{{ $complaint->id }}" /><br>
                            @endif

                            <fieldset disabled>
                            <div class="form-group row">
                                <label for="vendor_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Proveedor') }}</label>

                                <div class="col-md-6">
                                    <select id="vendor" name="vendor_id"
                                        class="form-control  @error('vendor_id') is-invalid @enderror">
                                        <option value="">--Seleccione un proveedor--</option>
                                        @foreach ($vendors->get() as $index => $vendor)
                                            <option value="{{ $index }}"
                                                {{ old('vendor_id', $complaint->vendor_id ?? '') == $index ? 'selected' : '' }}>
                                                {{ $vendor }}
                                            </option>
                                        @endforeach
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
                                        <option value="{{ $complaint->department_id ?? '' }}">
                                            {{ $complaint->department->name ?? '' }}</option>
                                    </select>

                                    @error('department_id')
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
                                        <option value="{{ $complaint->town_id ?? '' }}">
                                            {{ $complaint->town->name ?? '' }}</option>
                                    </select>

                                    @error('town_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zone" class="col-md-4 col-form-label text-md-right">{{ __('Zona') }}</label>

                                <div class="col-md-6">
                                    <select id="zone" name="zone" class="form-control  @error('zone') is-invalid @enderror">
                                        <option value="{{ $complaint->branchoffice->zone ?? '' }}">
                                            {{ $complaint->branchoffice->zone ?? '' }}</option>
                                    </select>

                                    @error('zone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="branchoffice_id" class="col-md-4 col-form-label text-md-right">Sucursal</label>

                                <div class="col-md-6">
                                    <select id="branchoffice" name="branchoffice_id"
                                        class="form-control  @error('branchoffice_id') is-invalid @enderror">
                                        <option value="{{ $complaint->branchoffice_id ?? '' }}">
                                            {{ $complaint->branchoffice->address ?? '' }}</option>
                                    </select>

                                    @error('branchoffice_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="summary" class="col-md-4 col-form-label text-md-right">Titulo</label>

                                <div class="col-md-6">
                                    <input id="summary" type="text"
                                        class="form-control @error('summary') is-invalid @enderror" name="summary"
                                        placeholder="Agregue un título breve."
                                        value="{{ old('summary', $complaint->summary ?? '') }}" required
                                        autocomplete="summary" autofocus>

                                    @error('summary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Descripción</label>

                                <div class="col-md-6">
                                    <textarea id="description" name="description" class="form-control"
                                        placeholder="Explique a detalle el inconveniente."
                                        required>{{ $complaint->description ?? '' }}</textarea>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            </fieldset>

                            <div class="form-group row">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">Categoría</label>

                                <div class="col-md-6">
                                    <select id="category_id" name="category_id"
                                        class="form-control  @error('status') is-invalid @enderror">
                                        @foreach ($categories->get() as $index => $category)
                                            <option value="{{ $index }}"
                                                {{ old('category_id', $complaint->category_id ?? '') == $index ? 'selected' : '' }}>
                                                {{ $category }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('summary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-md-4 col-form-label text-md-right">Estado</label>

                                <div class="col-md-6">
                                    <select id="status" name="status"
                                        class="form-control  @error('status') is-invalid @enderror">
                                        @foreach ($statuses->get() as $index => $status)
                                            <option value="{{ $index }}"
                                                {{ old('status', $complaint->status ?? '') == $index ? 'selected' : '' }}>
                                                {{ $status }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('summary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    @if (isset($complaint) && is_object($complaint))
                                        <a href="{{ route('complaint.index') }}"
                                            class="btn btn-outline-secondary">Cancelar</a>
                                    @else
                                        <a href="{{ route('complaint.search') }}"
                                            class="btn btn-outline-secondary">Cancelar</a>
                                    @endif
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            var vendor_id = '';
            var town_id = '';
            var zone_val = '';

            $("#vendor").on('change', function() {

                vendor_id = $(this).val();

                if (vendor_id) {
                    $.ajax({
                        url: '/department/get/' + vendor_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {

                            $("#department").empty();
                            $("#department").append(
                                '<option value="">--Seleccione un departamento--</option>');

                            $.each(data, function(key, value) {
                                $("#department").append(
                                    '<option value="' + key + '">' + value +
                                    '</option>');
                            });

                        }
                    });
                } else {
                    $("#department").empty();
                }

            });


            $("#department").on('change', function() {

                var department_id = $(this).val();

                if (department_id) {
                    $.ajax({
                        url: '/town/get/' + department_id + '/' + vendor_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {

                            $("#town").empty();
                            $("#town").append(
                                '<option value="">--Seleccione un municipio--</option>');

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


            $("#town").on('change', function() {

                town_id = $(this).val();

                if (town_id) {
                    $.ajax({
                        url: '/branchoffice/getZones/' + vendor_id + '/' + town_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {

                            $("#zone").empty();
                            $("#zone").append(
                                '<option value="0">--Seleccione una zona--</option>');

                            $.each(data, function(key, value) {
                                $("#zone").append(
                                    '<option value="' + key + '">' + value +
                                    '</option>');
                            });

                        }
                    });

                    $.ajax({
                        url: '/branchoffice/get/' + vendor_id + '/' + town_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {

                            console.log('sucursal sin zona: ' + zone_val);
                            console.log(data);

                            $("#branchoffice").empty();
                            $("#branchoffice").append(
                                '<option value="0">--Seleccione una sucursal--</option>');

                            $.each(data, function(key, value) {
                                $("#branchoffice").append(
                                    '<option value="' + key + '">' + value +
                                    '</option>');
                            });
                        }
                    });

                } else {
                    $("#zone").empty();
                    $("#branchoffice").empty();
                }

            });

            $("#zone").on('change', function() {

                zone_val = $(this).val();

                if (zone_val) {
                    $.ajax({
                        url: '/branchoffice/get/' + vendor_id + '/' + town_id + '/' + zone_val,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {

                            console.log('sucursal con zona: ' + zone_val);
                            console.log(data);

                            $("#branchoffice").empty();
                            $("#branchoffice").append(
                                '<option value="0">--Seleccione una sucursal--</option>');

                            $.each(data, function(key, value) {
                                $("#branchoffice").append(
                                    '<option value="' + key + '">' + value +
                                    '</option>');
                            });
                        }
                    });
                } else {
                    $("#branchoffice").empty();

                }

            });
        });
    </script>
@endsection
