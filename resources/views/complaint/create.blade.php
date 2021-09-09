@extends('layouts.app')

@section('content')
    @inject('vendors','App\Services\Vendors')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-primary mb-3">
                    <div class="card-header"
                        style="background-image: linear-gradient( 135deg, #ABDCFF 10%, #0396FF 100%);">
                        {{ __('Crear Queja') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('complaint.create') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="vendor_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Proveedor') }}</label>

                                <div class="col-md-6">
                                    <select id="vendor" name="vendor_id"
                                        class="form-control  @error('vendor_id') is-invalid @enderror">
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
                                    class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>

                                <div class="col-md-6">
                                    <select id="department" name="department_id"
                                        class="form-control  @error('department_id') is-invalid @enderror">
                                        <option value="">Seleccione un departamento</option>
                                    </select>

                                    @error('department_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="town_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Municipio') }}</label>

                                <div class="col-md-6">
                                    <select id="town" name="town_id"
                                        class="form-control  @error('town_id') is-invalid @enderror">
                                        <option value="">Seleccione un municipio</option>
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
                                        <option value="0">Seleccione una zona</option>
                                    </select>

                                    @error('zone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="branchoffice_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Sucursal') }}</label>

                                <div class="col-md-6">
                                    <select id="branchoffice" name="branchoffice_id"
                                        class="form-control  @error('branchoffice_id') is-invalid @enderror">
                                        <option value="">Seleccione una sucursal</option>
                                    </select>

                                    @error('branchoffice_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="summary"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                                <div class="col-md-6">
                                    <input id="summary" type="text"
                                        class="form-control @error('summary') is-invalid @enderror" name="summary"
                                        placeholder="Agregue un título breve." value="{{ old('summary') }}" required
                                        autocomplete="summary" autofocus>

                                    @error('summary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control"
                                        placeholder="Explique a detalle el inconveniente." required></textarea>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Adjunto') }}</label>
      
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="" required>
      
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                             </div>

                            <!--<div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Anónimo') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="g-recaptcha" data-sitekey="6LcHqkMcAAAAAF2v6O0oLUNoPgFoPKuVP4mr_Z7n">
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
                                '<option value="">Seleccione un departamento</option>');

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
                        url: '/town/get/' + vendor_id + '/' + department_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {

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
                                '<option value="">Seleccione una zona</option>');

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

                            console.log('sucursal sin zona: '+zone_val);
                            console.log(data);

                            $("#branchoffice").empty();
                            $("#branchoffice").append(
                                '<option value="0">Seleccione una sucursal</option>');

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

                            console.log('sucursal con zona: '+zone_val);
                            console.log(data);

                            $("#branchoffice").empty();
                            $("#branchoffice").append(
                                '<option value="0">Seleccione una sucursal</option>');

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