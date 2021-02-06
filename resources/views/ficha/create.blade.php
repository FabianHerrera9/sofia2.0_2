@extends('template.layout')
@section('title')
    Fichas
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card offset-md-3 col-md-6">
            <div class="card-body">
                <select class="form-select my-3" aria-label="Default select example">
                    <option selected>Seleccione Jornada</option>
                    <option value="Mixta">Mixta</option>
                    <option value="Diurna">Diurna</option>
                    <option value="Nocturna">Nocturna</option>
                </select>
                <select class="form-select my-3" aria-label="Default select example">
                    <option selected>Seleccione estado de la ficha</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione programa de formacion</option>
                    <option value="1">Cargue de programas</option>
                </select>
            </div>
            <hr>
            <button class="btn btn-success">Agregar ficha</button>
            <a type="button" class="btn" id="color-font" href="">Cancelar</a>
        </div>
    </div>      
</div>
@endsection
