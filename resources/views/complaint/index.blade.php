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

                  <table id="example" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Proveedor</th>
                            <th>Departamento</th>
                            <th>Municipio</th>
                            <th>Sucursal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($complaints as $complaint)
                        <tr>
                            <td>{{ $complaint->summary }}</td>
                            <td>{{ $complaint->description }}</td>
                            <td>{{ $complaint->vendor->name }}</td>
                            <td>{{ $complaint->department->name }}</td>
                            <td>{{ $complaint->town->name }}</td>
                            <td>{{ $complaint->branchoffice->address }}</td>
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
                        </tr>
                    </tfoot>
                </table>

              

              </div>
          </div>
      </div>
  </div>
</div>
@endsection


