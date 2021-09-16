@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="row justify-content-md-center">
                <div class="col">
                    
                    <div class="form-group row">
                        <label for="vendor_id"
                            class="col-md-4 col-form-label text-md-right">{{ __('Proveedor') }}</label>

                        <div class="col-md-6">
                            <select id="vendor" name="vendor_id"
                                class="form-control  @error('vendor_id') is-invalid @enderror">
                                <option value="">Seleccione un proveedor</option>
                                @foreach ($vendors as $index => $vendor)
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
                </div>
            </div>

        </div>
    </div>
</div>
    <canvas id="myChart" style="position: relative; height: 40vh; width: 90vw; "></canvas>

    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                datasets: [{
                    label: 'Quejas',

                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        let url = 'http://diaco-quejaonline.test/stadistic/getComplaints';

        fetch(url)
            .then(response => response.json())
            .then(datos => mostrar(datos))
            .catch(error => console.log(error))

        const mostrar = (complaints) => {
            console.log(complaints)



            for (let obj of Object.keys(complaints)) {
                var datos = complaints[obj];
                console.log(obj, datos);


                myChart.data['labels'].push(datos.department)
                myChart.data['datasets'][0].data.push(datos.quantity)
                myChart.update();
            }

        }
    </script>

@endsection
