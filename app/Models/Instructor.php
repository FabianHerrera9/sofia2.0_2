<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\In;

class Instructor extends Model
{
    use HasFactory;
    protected $table='instructores';
    protected $primaryKey='id';
    protected $fillable = [
        'Nombres',
        'Apellidos',
        'Documento',
        'Foto',
        'idFicha',
        'Estado'
    ];

    public function instructores (){
        return $this->hasMany(Instructor::class);
    }
}
