<?php

namespace IAServer\Http\Controllers\TeU\Model;

use Illuminate\Database\Eloquent\Model;

class Ping extends Model
{
    protected $connection = 'teu';
    protected $table = 'teu.ping';
    public $timestamps = false;
}
