@extends('layouts.public')

@section('content')
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="row justify-content-center mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                <img class="card-img-top img-responsive " src="">
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <h4 class="card-title">{{$peticion->titulo}}</h4>
                                <p class="card-text">{{$peticion->descripcion}}</p>
                                <p class="type-s ptxxs"><span><strong>{{$peticion->firmantes}} personas han firmado</strong> <span
                                            class="type-weak">de un objectivo de 300.000 firmas</span></span></p>
                                <div class="corgi-1aa4dmu">
                                    <a href=""
                                       class="btn btn-success" onclick="event.preventDefault(); document.getElementById('firma-id').submit();">Firma esta petición</a>
                                    <form id="firma-id" action="" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
