<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamano;
use App\Raza;

class tamanoController extends Controller
{
    public function getIndex(){
        $listado = Tamano::orderBy('id','asc')->get();
        return view('tamanos.index',['tamano'=>$listado]);
    }

    public function getTamanoCant($id){
        $oTamano = Tamano::orderBy('id',$id)->first();
        $oRaza = Raza::where('tamano_id',$id)->get();
        return view('tamanos.tamano-info',['rp'=>$oRaza,'tam'=>$oTamano]);
    }
}
