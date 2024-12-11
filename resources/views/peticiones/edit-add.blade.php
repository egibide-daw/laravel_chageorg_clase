@extends('layouts.public')
@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; margin-top: 20px;">
        <main style="width: 100%; max-width: 800px;">
        <div class="row g-5">
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            {{--@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif--}}

                <form method="post" action="{{route('peticiones.store')}}" enctype="multipart/form-data" class="card p-4 shadow-sm rounded ">
                    @csrf
                    <h2 class="text-center mb-4">Nueva Petición</h2>
                        <div class="form-group mb-3">
                            <label for="validationServer01" class="form-label">Titulo</label>
                            <input type="text" name="titulo" class="form-control  @error('titulo') is-invalid @enderror" id="validationServer01" >
                            @error('titulo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationServer01" class="form-label">Descripción</label>
                            <textarea name="descripcion" rows="5" class="form-control @error('descripcion') is-invalid @enderror" id="validationServer01" > </textarea>
                            @error('descripcion')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationServer01" class="form-label">Destinatario</label>
                            <textarea name="destinatario" class="form-control @error('destinatario') is-invalid @enderror" id="validationServer01" required> </textarea>
                            @error('destinatario')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div  class="form-group mb-3">
                                <label class="uiLabel-left form-element__label uiLabel" for="304:343;a"><span
                                        class="" data-aura-rendered-by="625:0">Seleciona una categoria para tu
                                        petición</span>
                                    <span class="required " title="obligatorio"
                                        data-aura-rendered-by="305:343;a">*</span>
                                </label>
                                <select name="categoria" class="form-select form-select-sm">
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
                        <div class="form-group mb-3">
                            <label class="uiLabel-left form-element__label uiLabel"
                                    for="304:343;a"><span class="">Sube una imagen</span>
                                    <span class="required " title="obligatorio">*</span>
                            </label>
                            <input name="file" type="file" class="form-control form-control-sm @error('file') is-invalid @enderror" aria-describedby=""
                                    placeholder="" aria-required="true">
                            @error('file')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger w-100">Enviar petición nueva</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

@endsection
