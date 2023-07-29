<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoniouno extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'testimoniounos';

    protected $fillable = [
        'nombre',
        'paterno',
        'materno',
        'profesion',
        'comentario',
        'logo'
    ];
    public $timestamps = false;
}
