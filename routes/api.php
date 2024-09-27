<?php

use App\Http\Controllers\CarrosControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/carros',[CarrosControler::class, 'store']);

Route::get('/carros/get', [CarrosControler::class, 'getAll']);

Route::put('/carros/update', [CarrosControler::class, 'update']);

Route::delete('/carros/delete', [CarrosControler::class, 'delete']);

