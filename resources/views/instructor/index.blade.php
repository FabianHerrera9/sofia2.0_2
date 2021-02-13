@extends('template.layout')
@section('title')
    Instructores
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card offset-md-2 col-md-8">
            <div class="btn-group d-md-block">
                <hr>
                <a href="{{route('instructor.create')}}" class="btn btn-success">Registrar instructor</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-hover">
                        <caption>Lista de instructores</caption>
                        <thead>
                            <tr class="table-dark">
                                <th>Foto</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Documento</th>
                                <th>Ficha</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($instructor as $instructores)
                            <tr>
                                <td>{{$instructores->Foto}}</td>
                                <td>{{$instructores->Nombres}}</td>
                                <td>{{$instructores->Apellidos}}</td>
                                <td>{{$instructores->Documento}}</td> 
                                @foreach($ficha as $fichas)
                                    @if($instructores->idFicha == $fichas->idFicha)
                                        <td>{{$fichas->idFicha}}</td>
                                    @endif
                                @endforeach
                                <td>
                                    <a href="">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href=" ">
                                        <i class="fas fa-ban"></i>
                                    </a>
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