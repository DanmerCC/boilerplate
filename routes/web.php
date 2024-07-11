<?php

use App\Models\WhatsappHistory;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('pdflike2scan')->group(function () {
    Route::view('/', 'pdflike2scan');

    Route::post('/upload', function (Request $request) {
        /** logica  */

        Log::info("convierte el pdf a scanned");
    });
});
