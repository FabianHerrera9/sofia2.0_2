<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aprendiz extends Model
{
    use HasFactory;
    protected $table='aprendices';
    protected $primaryKey='id';
    protected $fillable = [
        'Documento',
        'Nombre',
        'Apellidos'
        ,'Correo'
        ,'FechaNacimiento'
        ,'Genero'
        ,'TipoDocumento'
        ,'idFicha'
    ];

    public function aprendices(){
        return $this->hasMany(Aprendiz::class);
    }

}
