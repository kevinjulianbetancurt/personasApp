<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'tb_pais';
    protected $primaryKey = 'pais_codi';
    public $timestamps = false;

    // Para decirle a Laravel que el formato de mi ID está en char y no en int
    protected $keyType = 'string';
}
