<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactoMailable;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $post = Post::all();
    return view('welcome', compact('post'));
});
Route::get('/cookies', function () {
    return view('cookies');
});
Route::get('/terminos', function () {
    return view('terminos');
});
Route::get('/privacidad', function () {
    return view('privacidad');
});
Route::post('/contactos', function (Request $request) {
    $correo = new ContactoMailable($request->all());
    Mail::to('adaymonzon@gmail.com')->send($correo);

    return redirect('/#contact')->with('success', 'Mensaje enviado con exito');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin');

// Route::resource('/alumnos', AlumnoController::class);
