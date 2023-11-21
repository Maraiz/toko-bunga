<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function register() {
        $data['title']= 'Register';
        return view ('user/register', $data);
    }
}
