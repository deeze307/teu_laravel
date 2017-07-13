<?php

namespace IAServer\Http\Controllers\TeU;

use IAServer\Http\Controllers\TeU\Model\Consejos;
use IAServer\Http\Controllers\TeU\Model\Ping;
use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;

class TeUController extends CRUDTeUController
{
    //
    public function manage()
    {
        $empleosCategorias = self::empleosCategorias();
        return view('teu.management.index',['empleosCategorias'=>$empleosCategorias]);
    }

    public function ping()
    {
        return $this->getPing();
    }

    public function tips()
    {
        return $this->getTips();
    }

    public function enabledJobs()
    {
        return $this->getEnabledJobs();
    }

    public function staff()
    {
        return $this->getStaff();
    }

    public function empleosCategorias()
    {
        return $this->getEmpleosCategorias();
    }
}
