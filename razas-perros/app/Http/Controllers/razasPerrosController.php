<?php

namespace App\Http\Controllers;
use App\Raza;
use App\Tamano;
use App\Temperamento;
use Illuminate\Http\Request;

class razasPerrosController extends Controller
{
    public function getIndex(){
      $listado = Raza::orderBy('id','asc')->get();
      return view('raza.index',['razas'=>$listado]);
    }

    public function getRazaPerro($id){
        $oRaza = Raza::where("id",$id)->first();
        $otamano = Tamano::where('id',$oRaza->tamano_id)->first();
        return view('raza.raza-info',['rp'=>$oRaza, 'tam'=>$otamano]);
    }

    public function getAdminIndex(){
        $listado=Raza::orderBy('id','asc')->get();
        return view('admin..index',['razas'=>$listado]);
    }

    public function getAdminCreate(){
        $tamanos = Tamano::all();
        $temps= Temperamento::all();
        return view('admin.create',['tamanos'=>$tamanos, 'temps'=>$temps]);
    }

public function getAdminEdit( $id){
    $tamanos = Tamano::all();
    $temps= Temperamento::all();
    $oRaza = Raza::find($id);

    return view('admin.edit',['rp'=>$oRaza,'tamanos'=>$tamanos, 'temps'=>$temps]);
}
public function getAdminDelete($id){
    $oRaza = Raza::find($id);
    return view('admin.borrar',['rp'=>$oRaza]);
}

/*Funciones para ejecutar acciones*/
public function vjAdminCreate( Request $request)
    {
      $this->validate($request, [
          'nombre' => 'required|min:5',
          'descripcion' => 'required|min:10'
      ]);
        $rp=new Raza([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'alturaInicial' => $request->input('alturaInicial'),
            'alturaFinal' => $request->input('alturaFinal'),
            'tamano_id' => $request->input('tamano_id')

        ]);
        $rp->save();

        $rp->temperamentos()->attach($request->input('temperamentos')=== null ? []: $request->input('temperamentos'));

         return redirect()
        ->route('admin.index')
        ->with('info', 'Raza: ' . $request->input('nombre').' creada');
    }
    public function vjAdminEdit(Request $request)
        {
          $this->validate($request, [
              'nombre' => 'required|min:5',
              'descripcion' => 'required|min:10'
          ]);
            $oRaza=Raza::find($request->input('id'));
/*----------------------------Actualizar Datos-----------------------------------*/
            $oRaza->nombre = $request->input('nombre');
            $oRaza->descripcion = $request->input('descripcion');
            $oRaza->alturaInicial = $request->input('alturaInicial');
            $oRaza->alturaFinal = $request->input('alturaFinal');
            $oRaza->tamano_id = $request->input('tamano_id');
            $oRaza->save();
            $oRaza->temperamentos()->sync($request->input('temperamentos')=== null
            ? []: $request->input('temperamentos'));
            return redirect()
            ->route('admin.index')
            ->with('info', 'Raza: ' . $request->input('nombre').' editada');
        }

    public function vjAdminDelete(Request $request){
        $rp = Raza::find($request->input('id'));

        $rp->delete();
        return redirect()
       ->route('admin.index')
       ->with('info', 'La Raza ha sido borrarda!');
    }

}
