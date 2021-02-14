@extends('template.layout')
@section('title')
    Agregar instructor
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card offset-md-3 col-md-6">
                <div class="card-body">
                    <form action="{{route('instructor.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="file" id="Foto" name="Foto" accept="image/*" >
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="instructor">
                            <label for="Nombres">Nombre(s)</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos" >
                            <label for="Apellidos">Apellidos</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="Documento" name="Documento" placeholder="Documento" >
                            <label for="Documento">Documento</label>
                        </div>
                        <select name="idFicha" id="idFicha" class="form-select" aria-label="select" required>
                            <option value="">Seleccione la Ficha</option>
                                @foreach($ficha as $fichas)
                                    @foreach($programa as $pformacion)
                                        @if($fichas->idFicha == $pformacion->Codigo)
                                            <option value="{{$fichas->idFicha}}">{{$fichas->idFicha}} | {{$pformacion->PFormacion}}</option>
                                        @endif
                                    @endforeach
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
