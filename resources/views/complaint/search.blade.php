@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <br>
                <br>
                <br>
                <div class="card border-primary mb-3">
                    <h5 class="card-header" style="color:white;background-image: linear-gradient(-225deg, #1e3c72 0%, #3490dc 48%, #6BBBFF 100%);">
                        Quejas
                    </h5>

                    <div class="card-body">
                        <form method="POST" action="{{ route('complaint.show') }}">
                            @csrf

                            <div class="input-group mb-2 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text " id="basic-addon1"><i class="bi bi-search"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg "
                                    placeholder="Escribir código de queja" name="code" id="code"
                                    aria-describedby="basic-addon1">
                            </div>


                            <div class="form-group row mb-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block ">
                                        {{ __('Buscar') }}
                                    </button>
                                </div>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item mb-2"></li>
                                <li class="list-group-item"><h5>¿Algún comercio falto a sus derechos cómo consumidor?</h5></li>
                              </ul>

                            <div class="form-group row mb-3">
                                <div class="col-md-6 offset-md-3">
                                    <a href="#" class="btn btn-success btn-lg btn-block "><i class="bi bi-plus-circle"></i> Crear Queja</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
