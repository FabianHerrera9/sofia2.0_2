@extends('template.layout')
@section('title')
    Fichas
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card offset-md-3 col-md-6">
                <div class="card-body">

                    <form action="{{route('ficha.update',$ficha->idFicha)}}" method="post">
                        @csrf
                        @method('PUT')

                        <select name="idPformacion" id="idPformacion" class="form-select" aria-label="Default select example">

                            @foreach($programa as $pformacion)
                                @if($ficha->idPformacion == $pformacion->Codigo)
                                <option value="{{$pformacion->Codigo}}">{{$pformacion->PFormacion}}</option>
                                @endif
                            @endforeach

                            @foreach($programa as $pformacion)
                                <option value="{{$pformacion->Codigo}}">{{$pformacion->PFormacion}}</option>
                            @endforeach

                        </select>

                        <select name="Jornada" id="Jornada" class="form-select my-3" aria-label="Default select example" >
                            <option value="{{$ficha->Jornada}}">{{$ficha->Jornada}}</option>
                            <option value="Diurna">Diurna</option>
                            <option value="Mixta">Mixta</option>
                            <option value="Nocturna">Nocturna</option>
                        </select>

                        <select name="estado" id="estado" class="form-select my-3" aria-label="Default select example" >
                            <option value="{{$ficha->estado}}">{{$ficha->estado}}</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>


                        <hr>
                        <button class="btn btn-success" type="submit">Actualizar ficha</button>
                        <a type="button" class="btn" id="color-font" href="{{route('ficha.index')}}">Cancelar</a>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
