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
                            <input type="number" class="form-control" id="id" name="id" placeholder="Codigo">
                            <label for="Codigo">Codigo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="PFormacion" name="PFormacion" placeholder="Programa">
                            <label for="Programa">Nombre del programa de formación</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="SIGLA" name="SIGLA" placeholder="Siglas">
                            <label for="Siglas">Siglas en mayusculas</label>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success">Agregar ficha</button>
                        <a type="button" class="btn" id="color-font" href="{{route('programa.index')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
