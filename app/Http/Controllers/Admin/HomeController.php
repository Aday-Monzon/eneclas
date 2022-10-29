<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function registro()
    {
        $usuario = new User;
        return view('admin.registro', compact('usuario'));
    }
    public function crearUsuario(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return back()
            ->with('success', 'Usuario created successfully.');
    }
}
