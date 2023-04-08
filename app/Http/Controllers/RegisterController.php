<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

        //$request->validate([
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']); CARA PERTAMA UNTUK PENGAMANAN PASSWORD 
        $validateData['password'] = Hash::make($validateData['password']); // JANGAN LUPA PANGGIL DULU KELAS HASH NYA 

        User::create($validateData);

        //    $request->session()->flash CARA PERTAMA 

        return redirect('/login')->with('success', 'Registrasi Berhasil');
    }
}
