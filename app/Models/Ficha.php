<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;
    protected $table='fichas';
    protected $primaryKey='idFicha';
    protected $fillable = [
        'Jornada','estado','idPformacion'
    ];

    public function fichas(){
        return $this -> hasMany(Ficha::class);
    }

}
