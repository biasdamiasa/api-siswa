<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kelas', 'Kelascontroller@show');
Route::post('/kelas', 'Kelascontroller@store');

Route::get('/siswa', 'Siswacontroller@show');
Route::get('/siswa/{id}', 'Siswacontroller@detail');
Route::post('/siswa', 'Siswacontroller@store');
Route::put('/siswa/{id}', 'Siswacontroller@update');
Route::delete('/siswa/{id}', 'Siswacontroller@destroy');


