@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
    <div class="row page-title-header">
        <div class="col-md-12">
            <div class="page-header-toolbar">
                <div class="sort-wrapper">
                    <a  class="btn btn-primary" href="{{route('adminpeticiones.create')}}">
                        <i class="fa fa-plus-square-o white-gradient-bottom" ></i>New</a>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th> # </th>
            <th> Id </th>
            <th> Titulo </th>
            <th> Descripcion </th>
            <th> Firmantes </th>
            <th> Estado </th>
            <th> Acciones </th>
        </tr>
        </thead>
        <tbody>
            @foreach ($peticiones as $peticion)
                        <tr>
                            <td> <a href="{{route('adminpeticiones.show', $peticion->id)}}"><img src="{{asset('storage/' .$peticion->files()->first()->file_path)}}"></a>
                            </td>
                            <td> {{$peticion->id}} </td>
                            <td> {{$peticion->titulo}} </td>
                            <td>
                                {{$peticion->descripcion}}
                            </td>
                            <td> {{$peticion->firmantes}} </td>
                            <td> {{$peticion->estado}} </td>
                            <td>
                                <button type="submit"  class="btn btn-icons btn-rounded btn-success" href="{{route('adminpeticiones.edit',$peticion->id)}}"
                                   onclick="event.preventDefault(); document.getElementById('edit-{{$peticion->id}}').submit();">
                                <i class="fa fa-edit" ></i></button>
                                <form id="edit-{{$peticion->id}}" action="{{route('adminpeticiones.edit',$peticion->id)}}" method="GET" style="display: none;">
                                    @csrf
                                </form>
                                <button type="submit"  class="btn btn-icons btn-rounded btn-info" href="{{route('adminpeticiones.delete',$peticion->id)}}"
                                        onclick="event.preventDefault(); document.getElementById('delete-{{$peticion->id}}').submit();">
                                    <i class="fa fa-eraser" ></i></button>
                                <form id="delete-{{$peticion->id}}" action="{{route('adminpeticiones.delete',$peticion->id)}}" method="post" style="display: none;">
                                    @csrf
                                    @method("DELETE")
                                </form>
                                <button type="submit"  class="btn btn-icons btn-rounded btn-danger" href="{{route('adminpeticiones.estado',$peticion->id)}}"
                                        onclick="event.preventDefault(); document.getElementById('estado-{{$peticion->id}}').submit();">
                                    <i class="fa fa-check" ></i></button>
                                <form id="estado-{{$peticion->id}}" action="{{route('adminpeticiones.estado',$peticion->id)}}" method="POST" style="display: none;">
                                    @csrf
                                    @method("PUT")
                                </form>
                            </td>
                        </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    {{$peticiones->links()}}
@endsection
