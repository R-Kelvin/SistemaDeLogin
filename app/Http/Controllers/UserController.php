<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //tela de cadastar o usuário
    public function create(){
        return view('users.create');
        
    }

    public function store(Request $request){
       //dd($request);

    try{

       User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password
       ]);
       
        //menssagem de erro ou sucesso ao cadastrar
        //assistir novamente a aula 02 minuto 28:50 em caso de dúvida

       return redirect() -> route('user.create') -> with('Sucesso','Usuário casdastrado');
    } catch (Exception $e){
        return back() -> withInput() -> with('Erro','Usuário não casdastrado');
    }
    }
}