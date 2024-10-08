<?php

use App\Http\Controllers\PdfScannerController;
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


Route::domain(env('DOMAIN_NAME', 'like2scan.camayoc.com'))->group(function () {
    Route::view('/', 'pdflike2scan')->name('like2scan.view');
    Route::post('/upload', [PdfScannerController::class, 'upload'])->name('like2scan.upload');
});

Route::view('/admin', 'admin.base')->name('pdf.view');
