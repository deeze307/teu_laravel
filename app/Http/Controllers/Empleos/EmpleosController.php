<?php

namespace IAServer\Http\Controllers\Empleos;

use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class EmpleosController extends CRUDEmpleosController
{
    //
    public function viewCategories()
    {
//        $empleosCategorias = self::jobsCategrories();
        return view('teu.management.empleoscategorias.empleoscategorias');
    }

    public function viewJobs()
    {
        return view('teu.management.empleos.ofertaslaborales');
    }

    public function viewCreateJobs()
    {
        return view('teu.management.empleos.create');
    }

    public function enabledJobs()
    {
        return $this->getEnabledJobs();
    }

    public function jobsCategrories()
    {
        return $this->getJobsCategories();
    }

    public function crudCreateJobCategory($catNombre)
    {
        return $this->crudCreateJobCategory($catNombre);
    }

    public function createJob()
    {
        $job = new \stdClass();
        $job->titulo = Input::get('title');
        $job->descripcion = Input::get('descJob');
        $job->movil = Input::get('movil');
        $job->email = Input::get('email');
        $job->visible_web = Input::get('chkWeb') == 'on' ? 'true' : 'false';
        $job->visible_movil = Input::get('chkApp') == 'on' ? 'true' : 'false';
        $job->id_categoria = Input::get('selected');

        if($job->id_categoria == "NULL")
        {
            return redirect('jobs/new')->with('errors','Debe Seleccionar una categoría');
        }

//        return Input::all();
        return $this->crudCreateJob($job);
    }

    public function prompt()
    {
        return view('teu.management.empleos.prompt');
    }
}
