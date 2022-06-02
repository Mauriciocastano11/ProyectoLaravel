<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view ('/', 'inicio');
Route::view ('login', 'login');


Route::get('html/inicio', function () {
    return view('html/inicio');
});
Route::get('layouts/login', function () {
    return view('layouts/login');
});
Route::get('layouts/contraseña', function () {
    return view('layouts/contraseña');
});
Route::get('correcto', function () {
    return view('correcto');
});


?>
