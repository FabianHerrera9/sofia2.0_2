@extends('template.layout')
@section('title')
    Agregar aprendiz
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card offset-md-3 col-md-6">
                <div class="card-body">
                    <form action="{{route('aprendiz.store')}}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombres">
                            <label for="Nombre">Nombre(s)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos" >
                            <label for="Apellidos">Apellidos</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Correo">
                            <label for="Correo">Correo electronico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento" placeholder="Fecha de Nacimiento">
                            <label for="FechaNacimiento">Fecha de nacimiento</label>
                        </div>
                        <select name="TipoDocumento" id="TipoDocumento" class="form-select my-3" aria-label="selecionar tipo de documento" >
                            <option>Seleccione tipo de documento</option>
                            <option value="TI">TI</option>
                            <option value="CC">CC</option>
                            <option value="CE">CE</option>
                            <option value="PS">PS</option>
                        </select>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="Documento" name="Documento" placeholder="Documento" >
                            <label for="Documento">Documento</label>
                        </div>
                        <select name="Genero" id="Genero" class="form-select my-3" aria-label="selecionar genero" >
                            <option>Seleccione el genero</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="No-Binario">No-Binario</option>
                        </select>
                        <select name="idFicha" id="idFicha" class="form-select" aria-label="select">
                            <option value="">Seleccione la Ficha</option>
                                @foreach($ficha as $fichas)
                                    <option value="{{$fichas->idFicha}}">{{$fichas->Jornada}}</option>
                                @endforeach
                        </select>
                        <hr>
                        <button type="submit" class="btn btn-success">Agregar instructor</button>
                        <a type="button" class="btn" id="color-font" href="{{route('instructor.index')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
