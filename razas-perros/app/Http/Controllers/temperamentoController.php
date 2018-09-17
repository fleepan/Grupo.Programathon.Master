<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Raza;
use App\Temperamento;

class temperamentoController extends Controller
{
  public function getIndex(){
        $listado = Temperamento::orderBy('id','asc')->get();
        return view('temperamentos.index',['temps'=>$listado]);
    }

    public function getTamanoCant($id){
        $oTemp = Temperamento::where('id',$id)->with('razas')
        ->first();
        return view('temperamentos.temperamento-info',['temp'=>$oTemp]);
    }
}
