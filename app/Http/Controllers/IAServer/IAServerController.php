<?php

namespace IAServer\Http\Controllers\IAServer;

use IAServer\Http\Controllers\IAServer\Model\Menu;
use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IAServerController extends Controller
{
    public function index()
    {
        $all_menu = Menu::orderBy('titulo')->get();

        $root = array();
        foreach($all_menu as $menu)
        {
            // Por defecto se muestran las opciones del menu
            $print_menu = true;

            // Muestra u Oculta las opciones que no coincidan con nuestro permiso
            $permisos = explode(',',$menu->permiso);
            if(!empty($menu->permiso))
            {
                if(Auth::user() && Auth::user()->hasRole($permisos))
                {
                    $print_menu = true;
                } else
                {
                    $print_menu = false;
                }
            }

            if($print_menu)
            {
                $root[$menu->id] = $menu;
                $root[$menu->id]['submenu'] = array_filter(iterator_to_array($all_menu), function($m) use($menu) {
                    if($m->root == $menu->id) {
                        return $m;
                    }
                });
            }
        }

        return view('iaserver.home', compact('root'));
    }

    public function logo()
    {
        return view('iaserver.logo');
    }
}
