<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listado() {
        
        return view('admin.users.listado.index');
    }
}
