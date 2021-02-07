@extends('template.layout')
@section('title')
    Fichas
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card offset-md-3 col-md-6">
            <div class="card-body">
                <form action="{{route('ficha.store')}}" method="post">
                    @csrf
                    <select name="Jornada" id="Jornada" class="form-select my-3" aria-label="Default select example" >
                        <option>Seleccione Jornada</option>
                        <option value="Diurna">Diurna</option>
                        <option value="Mixta">Mixta</option>
                        <option value="Nocturna">Nocturna</option>
                    </select>

                    <select name="estado" id="estado" class="form-select my-3" aria-label="Default select example" >
                        <option>Seleccione estado de la ficha</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>

                    <select name="idPformacion" id="idPformacion" class="form-select" aria-label="Default select example">
                        <option value="">Seleccione Programa de Formacion</option>
                            @foreach($programa as $pformacion)
                                <option value="{{$pformacion->Codigo}}">{{$pformacion->PFormacion}}</option>
                            @endforeach
                    </select>
                    <hr>
                    <button class="btn btn-success" type="submit">Agregar ficha</button>
                    <a type="button" class="btn" id="color-font" href="{{route('ficha.index')}}">Cancelar</a>
                </form> 
            </div>

        </div>
    </div>
</div>
@endsection
