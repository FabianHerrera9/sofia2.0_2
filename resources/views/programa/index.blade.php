@extends('template.layout')
@section('title')
    Programas de formación
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card offset-md-2 col-md-8">
                <div class="btn-group d-md-block">
                    <a href="{{route('programa.create')}}" type="button" class="btn btn-success">Crear registro</a>
                </div>
                <div class="card-body">
                    <table class="table  table-hover">
                        <caption>Lista de programas de formación</caption>
                        <thead>
                        <tr class="table-dark">
                            <th>Codigo</th>
                            <th>Programa de formación</th>
                            <th>Sigla</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($programa as $programas)
                        <tr>
                            <td>{{$programas->id}}</td>
                            <td>{{$programas->PFormacion}}</td>
                            <td>{{$programas->SIGLA}}</td>
                            <td>
                                <a href="">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="">
                                    <i class="fas fa-ban"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
