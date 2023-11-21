<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function register() 
    {
        $data['title']= 'Register';
        return view ('user/register', $data);
    }

    public function register_action(Request $request) 
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|unique:tb_user',
            'password'=> 'required',
            'passwordconf'=> 'required|same:password',
        ]);
        $user = new User([
            'name'=> $request->name,
            'email'=> $request->name,
            'password'=> Hash::make ($request->name),
        ]);
        $user->save();
        return redirect()->route('login')->with('success','Registration Success');
    }
}
