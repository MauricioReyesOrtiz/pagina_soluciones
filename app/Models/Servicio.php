<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'servicios';

    protected $fillable = [
        'nombre',
        'descripcion',
        'logo'
    ];
    public $timestamps = false;
}
