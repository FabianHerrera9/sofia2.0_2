<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PFormacion extends Model
{
    use HasFactory;
    protected $table = 'programasdeformacion';
    protected $primaryKey = 'Codigo';
    protected $fillable = [
        'PFormacion','SIGLA'
    ];

    public function programasdeformacion(){
        return $this->hasMany(PFormacion::class);
    }
}
