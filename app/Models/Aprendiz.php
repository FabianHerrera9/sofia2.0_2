<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;
    protected $table='aprendices';
    protected $primaryKey='idAprendiz';
    protected $fillable = [
        'Documento','Nombre','Apellidos','Correo','FechaNacimiento','Genero','TipoDocumento'
    ];
}
