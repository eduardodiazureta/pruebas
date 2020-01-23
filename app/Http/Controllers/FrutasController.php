<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrutasController extends Controller
{
    //Accion que devuelva una vista
    public function getIndex(){
    	return view('frutas.index')
    	->with('frutas', array('naranja', 'pera', 'sandia', 'fresa', 'melon', 'piña'));
    }

    public function getNaranjas(){
    	return 'Accion de naranjas';
    }

    public function anyPeras(){
    	return 'Accion de peras ';
    }

    public function recibirFormulario(Request $request){
        $data=$request;
        return 'El nombre de la fruta es: '.$request->input('nombre');
    }
}
