<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;

/**
* Route::get    |Consultar  
* Route::post   |Crear
* Route::delete |Eliminar
* Route::put    |Actualizar
*/
/** 
Route::get('/', [Pagecontroller::class, 'home'])->name('home');

Route::get('blog', [Pagecontroller::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [Pagecontroller::class, 'post'])->name('post');

Route::get('buscar', function (Request $request) {
    return $request->all();
});
*/

Route::controller(Pagecontroller::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
});



