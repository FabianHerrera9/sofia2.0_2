@extends('template.layout')
@section('title')
    Agregar aprendiz
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card offset-md-3 col-md-6">
                <div class="card-body">
                    <form action="{{route('aprendiz.update',$aprendiz->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombres" value="{{$aprendiz->Nombre}}">
                            <label for="Nombre">{{$aprendiz->Nombre}}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos" value="{{$aprendiz->Apellidos}}" >
                            <label for="Apellidos">{{$aprendiz->Apellidos}}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Correo" value="{{$aprendiz->Correo}}">
                            <label for="Correo">{{$aprendiz->Correo}}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento" placeholder="Fecha de Nacimiento" value="{{$aprendiz->FechaNacimiento}}">
                            <label for="FechaNacimiento">{{$aprendiz->FechaNacimiento}}</label>
                        </div>
                        <select name="TipoDocumento" id="TipoDocumento" class="form-select my-3" aria-label="selecionar tipo de documento" >
                            <option value="{{$aprendiz->TipoDocumento}}">{{$aprendiz->TipoDocumento}}</option>
                            <option value="TI">TI</option>
                            <option value="CC">CC</option>
                            <option value="CE">CE</option>
                            <option value="PS">PS</option>
                        </select>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="Documento" name="Documento" placeholder="Documento" value="{{$aprendiz->Documento}}" >
                            <label for="Documento">{{$aprendiz->Documento}}</label>
                        </div>
                        <select name="Genero" id="Genero" class="form-select my-3" aria-label="selecionar genero" >
                            <option>{{$aprendiz->Genero}}</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="No-Binario">No-Binario</option>
                        </select>
                        <select name="idFicha" id="idFicha" class="form-select" aria-label="select">

                            @if($aprendiz->idFicha == "")
                                <option>Sin asignar</option>
                            @else

                            @foreach($ficha as $fichas)
                                @foreach($programa as $pformacion)
                                    @if($fichas->idFicha == $pformacion->Codigo)
                                        <option value="{{$fichas->idFicha}}"> {{$fichas->idFicha}} | {{$pformacion->PFormacion}} | {{$fichas->estado}}</option>
                                    @endif
                                @endforeach
                            @endforeach
                            @endif
                                <option value="">Sin asignar</option>

                            @foreach($ficha as $fichas)
                                @foreach($programa as $pformacion)
                                    @if($fichas->idFicha == $pformacion->Codigo)
                                        <option value="{{$fichas->idFicha}}"> {{$fichas->idFicha}} | {{$pformacion->PFormacion}} | {{$fichas->estado}}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>
                        <hr>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a type="button" class="btn" id="color-font" href="{{route('aprendiz.index')}}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
