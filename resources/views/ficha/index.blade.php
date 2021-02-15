    @extends('template.layout')
@section('title')
    Fichas
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card offset-md-2 col-md-8">
            <div class="btn-group d-md-block">
                <hr>
                <a href="{{route('ficha.create')}}" class="btn btn-success">Registro Ficha</a>

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
                                @foreach($programa as $pformacion)
                                    @if($ficha->idPformacion == $pformacion->Codigo)
                                        <td>{{$pformacion->PFormacion}}</td>
                                    @endif
                                @endforeach
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
