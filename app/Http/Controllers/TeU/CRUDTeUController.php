<?php

namespace IAServer\Http\Controllers\TeU;

use IAServer\Http\Controllers\TeU\Model\Consejos;
use IAServer\Http\Controllers\TeU\Model\Empleos;
use IAServer\Http\Controllers\TeU\Model\Ping;
use IAServer\Http\Controllers\TeU\Model\Staff;
use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;

class CRUDTeUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getPing()
    {
        return Ping::all();
    }

    public function getTips()
    {
        return Consejos::select('consejo_titulo','consejo_desc')
                        ->where('visible','t')->get();
    }

    public function getEnabledJobs()
    {
        return Empleos::select('titulo','descripcion','movil','email','id_categoria','created_at')
                        ->where('visible_movil','t')->orderBy('created_at','desc')->get();
    }

    public function getStaff()
    {
        return DB::table('staff')->join('staff_rol','staff.id_rol','=','staff_rol.id')
                    ->select('staff.nombre','staff.apellido','staff.telefono','staff.email','staff_rol.descripcion','staff.descripcion','staff.avatar')
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
    public function create()
    {
        //
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
