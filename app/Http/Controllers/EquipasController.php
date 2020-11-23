<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipas;
class EquipasController extends Controller
{
    //
    public function index(){
        $equipas= Equipas::all();
        return view('equipas.index',[
            'equipas'=>$equipas
        ]);
        
    }
    public function show(Request $request){
        $id_equipa = $request->id;
        $equipas=Equipas::where('id_equipa',$id_equipa)->with('equipas')->first();
        return view('equipas.show',[
            'equipas'=>$equipas
        ]);
    
    }


}
