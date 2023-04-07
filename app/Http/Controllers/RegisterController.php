<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Registration Form',
            "active" => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // MENAMPILKAN DATA ATAU MENANGKAP DATA YANG DIKIRIMKAN DARI FORM REGISTRATION

        // return $request->all();

        $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
    }
}
