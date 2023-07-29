<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'portafolios';

    protected $fillable = [
        'nombre',
        'descripcion_corta',
        'descripcion_larga',
        'logo'
    ];
    public $timestamps = false;
}
