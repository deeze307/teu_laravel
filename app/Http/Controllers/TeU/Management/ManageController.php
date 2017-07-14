<?php

namespace IAServer\Http\Controllers\TeU\Management;

use IAServer\Http\Controllers\TeU\CRUDTeUController;
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
