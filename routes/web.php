<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//meng-group
Route::prefix('/')->group(function() {
Route::get('/data', function () {
    return 'data diri:
    nama: mas hadi
    kelas : 11
    umur: 17';
});
Route::get('/detail/{nama}/{kelas}', [App\Http\Controllers\StudentController::class, "detail"]);
Route::get('/student', [App\Http\Controllers\StudentController::class, "Student"]);
Route::get('/student/{nama}', [App\Http\Controllers\StudentController::class, "name"]);
});
