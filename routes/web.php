<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\EntertainmentController;

// Route::get('/', function () {
//     $value = Http::withHeaders(
//        [
//         'x-api-key' => '12345',
//         'Accept' => 'application/json',
//        ]
//     )->get('http://localhost:8000/api/main');
//     return $value;
// });

Route::get('/', [HomeController::class,'index' ]);
Route::get('/entertainment', [EntertainmentController::class,'index' ]);
Route::get('/news', [NewsController::class,'index' ]);
Route::get('/news/{slug}', [DetailController::class,'index' ]);