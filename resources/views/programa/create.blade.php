@extends('template.layout')
@section('title')
    Agregar programa
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card offset-md-3 col-md-6">
                <div class="card-body">
                    <form action="{{route('programa.store')}}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="PFormacion" name="PFormacion" placeholder="Programa">
                            <label for="PFormacion">Nombre del programa de formación</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control uppercase" id="SIGLA" name="SIGLA" placeholder="Siglas" >
                            <label for="SIGLA">Siglas</label>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success">Agregar Programa de Formacion</button>
                        <a type="button" class="btn" id="color-font" href="{{route('programa.index')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
