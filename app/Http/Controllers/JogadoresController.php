<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogadores;

class JogadoresController extends Controller
{
    //
    public function index(){
        $jogadores= Jogadores::all();
        return view('jogadores.index',[
            'jogadores'=>$jogadores
        ]);
        
    }
    public function show(Request $request){
        $id_jogador = $request->id;
        $jogadores=jogador::where('id_jogador',$id_jogador)->with('equipas')->first();
        return view('jogadores.show',[
            'jogadores'=>$jogadores
        ]);
    }

}
