<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return response()->view('admin.users.index');
    }

    public function show() {
        return response()->view('admin.users.show');
    }
}
