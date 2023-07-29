<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoniotre extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'testimoniotres';

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
