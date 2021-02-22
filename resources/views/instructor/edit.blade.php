@extends('template.layout')
@section('title')
    Agregar instructor
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card offset-md-3 col-md-6">
                <div class="card-body">
                    <form action="{{route('instructor.update',$instructor->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-floating mb-3">
                            <input type="file"  id="Foto" name="Foto" accept="image/*" value="{{$instructor->Foto}}" >
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" value="{{$instructor->Nombres}}" class="form-control" id="Nombres" name="Nombres" placeholder="instructor">
                            <label for="Nombres">{{$instructor->Nombres}}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" value="{{$instructor->Apellidos}}" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos" >
                            <label for="Apellidos">{{$instructor->Apellidos}}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" value="{{$instructor->Documento}}" class="form-control" id="Documento" name="Documento" placeholder="Documento" >
                            <label for="Documento">{{$instructor->Documento}}</label>
                        </div>
                        <select name="Estado" id="Estado" class="form-select my-3" aria-label="Default select example" >
                            <option value="{{$instructor->Estado}}">{{$instructor->Estado}}</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                        <select name="idFicha" id="idFicha" class="form-select" aria-label="select" required>
                            @foreach($ficha as $fichas)
                                @foreach($programa as $pformacion)
                                    @if($fichas->idFicha == $pformacion->Codigo & $instructor->idFicha == $fichas->idFicha)
                                        <option value="{{$fichas->idFicha}}">{{$fichas->idFicha}} | {{$pformacion->PFormacion}}</option>
                                    @endif
                                @endforeach
                            @endforeach
                            <option>Seleccione la Ficha</option>
                            @foreach($ficha as $fichas)
                                @foreach($programa as $pformacion)
                                    @if($fichas->idFicha == $pformacion->Codigo)
                                        <option value="{{$fichas->idFicha}}">{{$fichas->idFicha}} | {{$pformacion->PFormacion}}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>
                        <hr>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a type="button" class="btn" id="color-font" href="{{route('instructor.index')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
