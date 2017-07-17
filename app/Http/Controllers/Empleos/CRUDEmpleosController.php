<?php

namespace IAServer\Http\Controllers\Empleos;

use IAServer\Http\Controllers\Empleos\Model\Empleos;
use IAServer\Http\Controllers\Empleos\Model\EmpleosCategorias;
use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Mockery\CountValidator\Exception;

class CRUDEmpleosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getEnabledJobs()
    {
        return Empleos::select('titulo','descripcion','movil','email','id_categoria','created_at')
                        ->where('visible_movil','t')->orderBy('created_at','desc')->get();
    }

    public function getJobsCategories()
    {
        return EmpleosCategorias::select('id','categoria_nombre')
                                ->orderBy('categoria_nombre','asc')
                                ->get();
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createJobCategory($catNombre)
    {
        try
        {
            $empCat = new EmpleosCategorias();
            $empCat->categoria_nombre = $catNombre;
            $empCat->save();
            return "ok";
        }
        catch(Exception $ex){
            return "error";
        }
    }

    public function updateJobCategory($id,$nuevoNombre)
    {
        try
        {
            $empCat = EmpleosCategorias::find($id);
            $empCat->categoria_nombre = $nuevoNombre;
            $empCat->save();
            return "ok";
        }
        catch(Exception $ex)
        {
            return "error";
        }
    }

    public function deleteJobCategory($id)
    {
        try
        {
            $empCat = EmpleosCategorias::find($id);
            $empCat->delete();
            return "ok";
        }
        catch(Exception $ex)
        {
            return "error";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
