<?php

namespace IAServer\Http\Controllers\Empleos;

use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;

class EmpleosController extends CRUDEmpleosController
{
    //
    public function viewCategories()
    {
        $empleosCategorias = self::jobsCategrories();
        return view('teu.management.empleos.empleoscategorias',['empleosCategorias'=>$empleosCategorias]);
    }

    public function enabledJobs()
    {
        return $this->getEnabledJobs();
    }

    public function jobsCategrories()
    {
        return $this->getJobsCategories();
    }

    public function createJobCategory($catNombre)
    {
        return $this->createJobCategories($catNombre);
    }

    public function prompt()
    {
        return view('teu.management.empleos.prompt');
    }
}
