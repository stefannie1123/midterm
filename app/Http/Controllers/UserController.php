<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {

        $user = User::orderBy('id')->get();

        return view('users.index', ['users'=>$user]);

    }
}
