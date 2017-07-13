<?php

namespace IAServer\Http\Controllers\TeU;

use IAServer\Http\Controllers\TeU\Model\Consejos;
use IAServer\Http\Controllers\TeU\Model\Ping;
use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;

class ManageController extends CRUDTeUController
{
    //
    public function index()
    {
        $empleosCategorias = self::empleosCategorias();
        return view('teu.management.index',['empleosCategorias'=>$empleosCategorias]);
    }

    public function empleosCategorias()
    {
        return $this->getEmpleosCategorias();
    }
}
