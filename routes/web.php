<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/usuarios',[UserController::class,'index']);
Route::get('admin/usuarios/{user}',[UserController::class,'show']);
Route::get('admin/documents', [DocumentController::class, 'index']);
// Route::get('admin/documents/{document}', [DocumentController::class, 'show']);

Route::get('pw2',function(){
    //return 'programação web II';
    return [
        'Disciplina' => 'Programação Web II',
        'Curso' => 'BSN'
    ];
});
