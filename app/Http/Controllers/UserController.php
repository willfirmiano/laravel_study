<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index() {
        $users = ['Wesley', 'Matheus', 'Guilherme'];

        return view('users/index', compact('users'));
    }

    public function show($id) {
            return view('users/show', compact('id'));
    }
}
