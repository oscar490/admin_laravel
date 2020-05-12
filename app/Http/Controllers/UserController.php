<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function listado() {
        
        $users = User::get();

        return view('admin.users.listado.index', ['users' => $users]);
    }

    public function create() {

        return view('admin.users.create');
    }


    public function store(Request $request) {
        dd($request->all());
    }
}
