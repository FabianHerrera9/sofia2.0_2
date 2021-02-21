@extends('template.layout')
@section('title')
    Fichas
@endsection
@section('content')
    <div class="container">
        <form class="form-inline" action="{{route('ficha.index')}}" method="get">
            <div class="form-floating my-3">
                <input name="Buscar" id="Buscar" value="{{$Buscar}}" class="form-control" type="text"
                       placeholder="Buscar">
                <label for="Buscar">Buscar </label>
                <button class="btn btn-success w-100" type="submit">Buscar</button>
            </div>
        </form>
        <div class="mx-5 px-5">
            <div class="btn-group flex-column w-100 offset-lg-4 col-lg-4 px-5">

                <div class="btn-group">
                    <div>
                        <div>
                            <a href="{{route('ficha.index')}}" class="btn my-3 btn-outline-success">Fichas Activas</a>
                            <a href="{{route('ficha.inactive')}}" class="btn btn-outline-danger my-3">Fichas
                                Inactivas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card offset-lg-2 col-lg-8">
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
                        @foreach($activas as $ficha)
                            <tr>
                                <td>{{$ficha->idFicha}}</td>
                                <td>{{$ficha->Jornada}}</td>
                                <td>{{$ficha->estado}}</td>
                                @if($Buscar != '')
                                    <td>{{$ficha->PFormacion}}</td>
                                @else
                                    @foreach($programa as $program)
                                        @if($ficha->idPformacion == $program->Codigo)
                                            <td>{{$program->PFormacion}}</td>
                                        @endif
                                    @endforeach
                                @endif
                                <td>
                                    @csrf
                                    <a href="{{route('ficha.edit',$ficha->idFicha)}}">
                                        <i class="far fa-edit"></i>
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
