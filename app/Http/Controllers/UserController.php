<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $allUsers = User::all();

        return view("users", ["var_allUsers" => $allUsers]);
    }

    public function create()
    {
        return view('create_user');
    }

    public function store()
    {
        // $allData = request()->all();
        //form data validation
        $validData = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'

        ]);

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();

        return view('user_info', ['var_user' => $user]);
    }


    public function edit($id)
    {

        // $post = Post::where('id', $id)->first();
        $user = User::find($id); //ili koristi Eloqent


        $user->phone = request('phone');
        $user->bpg = request('bpg');
        // $user->img = request('img');
        $user->save();

        return view('user_info', ['var_user' => $user]);
    }
}
