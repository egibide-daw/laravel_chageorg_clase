@extends('layouts.public')

@section('content')
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <h1>Descubrir peticiones</h1>
        <section>
            @foreach ($peticiones as $peticion)

                <div class="row justify-content-center mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <img class="card-img-top img-responsive "
                                             src="{{asset('storage/' .$peticion->files()->first()->file_path)}}">
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h4 class="card-title">{{$peticion->titulo}}</h4>
                                        <p class="card-text">{{$peticion->descripcion}}</p>
                                        <p class="type-s ptxxs"><span><strong>{{$peticion->firmantes}} personas han firmado</strong> <span
                                                    class="type-weak">de un objectivo de 300.000 firmas</span></span>
                                        </p>
                                        <a href="{{route('peticiones.show',$peticion->id)}}" class="btn btn-danger">Entrar</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </section>
            {!! $peticiones->links() !!}

    </div>

@endsection
