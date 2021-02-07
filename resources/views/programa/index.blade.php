@extends('template.layout')
@section('title')
    Programas de formación
@endsection

@section('content')
    <style type="text/css">
        .uppercase{
            text-transform: uppercase;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="card offset-md-2 col-md-8">
                <div class="btn-group d-md-block">
                    <hr>
                    <a href="{{route('programa.create')}}" type="button" class="btn btn-success">Nuevo Programa de Formacion</a>
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
                            <td>{{$programas->Codigo}}</td>
                            <td>{{$programas->PFormacion}}</td>
                            <td class="uppercase">{{$programas->SIGLA}}</td>
                            <td>

                                <a href="{{route('programa.edit',$programas->Codigo)}}">
                                    <i class="far fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
