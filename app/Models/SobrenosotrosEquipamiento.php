<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SobrenosotrosEquipamiento extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'sobrenosotros_equipamientos';

    protected $fillable = [
        'fecha',
        'titulo',
        'descripcion',
        'logo'
    ];
    public $timestamps = false;
}
