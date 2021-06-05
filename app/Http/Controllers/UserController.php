<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function listUser(){
        $users = User::all();
        
        return view('listUsers', [
            'users'=>$users
        ]);
    }

    public function userId(User $user){
        //dd($user);
        return view('userId', [
            'user'=>$user
        ]);
        
    }

    public function addUser(){
        return view('addUser');
    }
    public function storeUser(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->cpf = $request->cpf;
        $user->birthday = $request->birthday;
        $user->save();
        return redirect()->route('users.listUsers');

    }
    public function destroyUser(User $user){
        $user->delete();
        return redirect()->route('users.listUsers');
    } 
}
