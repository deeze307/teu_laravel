<?php

namespace IAServer\Http\Controllers\Empleos\Model;

use Illuminate\Database\Eloquent\Model;

class Empleos extends Model
{
    protected $connection = 'teu';
    protected $table = 'teu.empleos';
}
