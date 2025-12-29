<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //tela de cadastar o usuário
    public function create(){
        return view('users.create');
        
    }

    public function store(Request $request){
       dd($request);
        
    }
}
