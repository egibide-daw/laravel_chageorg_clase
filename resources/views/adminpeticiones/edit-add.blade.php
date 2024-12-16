@extends('layouts.admin')
@section('content')
    <div class="container-wrapper">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class=" row">
            <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            @if(!isset($peticion->titulo))
                            <form method="post" action="{{route('adminpeticiones.store')}}" enctype="multipart/form-data">
                                @csrf
                                @else
                                    <form method="post" action="{{route('adminpeticiones.update',$peticion->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                @endif
                                <div class="form-group">
                                        <label for="exampleInputName1">Dale un título</label>
                                        <input type="text" name="titulo" class="form-control" id="exampleInputName1" placeholder="Título que deseas darle a tu petición" value="{{ old('titulo', $peticion->titulo) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Descripción</label>
                                    <textarea type="text" name="descripcion"  class="form-control" id="exampleInputName1" placeholder="Describe las personas afectadas y el problema qu enfrentanLos lectores son más propensos a tomar acción cuando comprenden quien está realmente afectado.
Describe la soluciónExplica qué tiene que pasar y quién puede marcar la diferencia. Deja claro qué pasa si ganas o pierdes.
Hazlo personalEs más probable que los lectores firmen y apoyen tu petición si dejas claro por qué te importa.
Respeta a los demásNo hagas bullying, ni utilices un discurso de odio, violento o falso.">{{ old('descripcion', $peticion->descripcion) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Destinatario</label>
                                    <input type="text" name="destinatario" class="form-control" id="exampleInputName1" placeholder="Elige el destinatario o destinatarios a los que dirigir tu petición. " value="{{ old('destinatario', $peticion->destinatario) }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Seleciona una categoria para tu
                                        petición</label>
                                    <select name="category" class="form-control form-control-lg">
                                        <option value="1">Sanidad</option>
                                        <option value="2">Medio ambiente</option>
                                        <option value="3">Educación</option>
                                        <option value="4">Justicia económica</option>
                                        <option value="5">Refugiados</option>
                                        <option value="6">Derechos de las mujeres</option>
                                        <option value="7">Lgtb</option>
                                        <option value="8">Alimentación</option>
                                        <option value="9">Patrimonio cultural</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Sube una foto para asociarla a la petición</label>
                                    <input type="file" name="file" class="form-control file-upload-info">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-success mr-2" id="exampleInputName1" value="Guardar petición">
                                </div>

                            </form>

                        </div>

                    </div>
            </div>
        </div>
    </div>


@endsection
