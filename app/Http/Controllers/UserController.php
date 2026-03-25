<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        //select * from users
        //return $users;
        return view('users.index',[
            'users' => $users,
            'title' => 'Usuários'
        ]);
    }

    public function show(User $user){
        //return $user;
        return view('users.show',[
            'user' => $user,
            'title' => 'Usuário - ' . $user->name
        ]);
    }
}
