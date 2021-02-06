@extends('template.layout')
@section('title')
    Fichas
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card offset-md-2 col-md-8">
            <div class="btn-group d-md-block">
                <button type="button" class="btn btn-success">Crear registro</button>
            </div>
            <div class="card-body">
                <table class="table  table-hover">
                    <caption>Lista de fichas</caption>
                    <thead>
                        <tr class="table-dark">
                            <th>Id</th>
                            <th>Programa de formación</th>
                            <th>Jornada</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>asdfasd</td>
                            <td>asdfasd</td>
                            <td>asdfasd</td>
                            <td>asdfasd</td>
                            <td>
                                <a href="">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="">
                                    <i class="fas fa-ban"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
