<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoniodo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'testimoniodos';

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
