<?php

namespace IAServer\Http\Controllers\TeU\Model;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $connection = 'teu';
    protected $table = 'teu.staff';
}
