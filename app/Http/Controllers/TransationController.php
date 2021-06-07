<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transation;
use App\Models\User;

class TransationController extends Controller
{
    //
    public function addTransation(User $user){

        return view('addTransation', [
            'user'=>$user
        ] );
    }
    public function storeTransation(Request $request, User $user){
        $transation = new Transation();
        $transation->categoria = $request->categoria;
        $transation->valor = $request->valor;
        $transation->descricao = $request->descricao;
        $transation->user_id = $request->user_id;
        $transation->save();
        return redirect()->route('users.listUsers');

    }

    public function destroyTransation(Transation $transation){
        $transation->delete();
        return redirect()->route('users.idUser');
    }
   
}
