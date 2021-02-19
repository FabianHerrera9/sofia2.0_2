@extends('template.layout')
@section('title')
    Fichas
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-lg-3 mb-3">
                <div class="btn-group flex-column">
                    <div class="btn-group">
                        <div>
                            <div>
                                <a href="{{route('ficha.index')}}" class="btn btn-primary my-3">Fichas Activas</a>
                                <a href="{{route('ficha.inactive')}}" class="btn btn-warning my-3">Fichas Inactivas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="form-inline" action="{{route('ficha.index')}}" method="get">
                    <div class="form-floating my-3">
                        <input name="Buscar" id="Buscar" value="{{$Buscar}}" class="form-control" type="text"
                               placeholder="Buscar ">
                        <label for="Buscar">Buscar caracter</label>
                        <button class="btn btn-success" type="submit">Buscar</button>
                    </div>
                </form>
            </div>
            <div class="card offset-lg-1 col-lg-8">
                <div class="btn-group d-md-block">
                    <div class="btn-group">
                        <a href="{{route('ficha.create')}}" class="btn btn-success mx-3 my-3">Registro Ficha</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-hover">
                            <caption>Lista de fichas</caption>
                            <thead>
                            <tr class="table-dark">
                                <th>Ficha</th>
                                <th>Jornada</th>
                                <th>Estado</th>
                                <th>Programa de formación</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                    @foreach($fichas as $ficha)
                                        <tr>
                                            <td>{{$ficha->idFicha}}</td>
                                            <td>{{$ficha->Jornada}}</td>
                                            <td>{{$ficha->estado}}</td>
                                            <td>{{$ficha->PFormacion}}</td>
                                            <td>
                                                @csrf
                                                <a href="{{route('ficha.edit',$ficha->idFicha)}}">
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
