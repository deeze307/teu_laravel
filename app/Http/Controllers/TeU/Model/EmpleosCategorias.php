<?php

namespace IAServer\Http\Controllers\TeU\Model;

use Illuminate\Database\Eloquent\Model;

class EmpleosCategorias extends Model
{
    protected $connection = 'teu';
    protected $table = 'teu.empleos_categorias';
}
