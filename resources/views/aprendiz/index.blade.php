@extends('template.layout')
@section('title')
    Aprendices
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="btn-group d-md-block">
                    <hr>
                    <a href="{{route('aprendiz.create')}}" class="btn btn-success">Registrar aprendiz</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-hover">
                            <caption>Listado de Aprendices SENA</caption>
                            <thead>
                            <tr class="table-dark">
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Fecha de nacimiento</th>
                                <th>Documento</th>
                                <th>Genero</th>
                                <th>Ficha</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($aprendiz as $aprendices)
                                <tr>
                                    <td>{{$aprendices->Nombre}}</td>
                                    <td>{{$aprendices->Apellidos}}</td>
                                    <td>{{$aprendices->Correo}}</td>
                                    <td>{{$aprendices->FechaNacimiento}}</td>
                                    <td>{{$aprendices->TipoDocumento}} {{$aprendices->Documento}}</td>
                                    <td>{{$aprendices->Genero}}</td>
                                    @if($aprendices->idFicha == "")
                                        <td>Sin asignar</td>
                                    @endif
                                    @foreach($ficha as $fichas)
                                        @if($aprendices->idFicha == $fichas->idFicha)
                                            <td>{{$fichas->idFicha}}</td>
                                        @endif
                                    @endforeach
                                    <td>
                                        <form action="{{route('aprendiz.delete',$aprendices->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('aprendiz.edit',$aprendices->id)}}">
                                                <i class="far fa-edit "></i>
                                            </a>
                                                <button type="submit" class="fas fa-ban"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
