<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/handlerv2', function (Request $request) {

    Log::info($request->method());

    $conexion = new MongoDB\Driver\Manager(config('database.connections.mongodb.dsn'));

    $bulk = new MongoDB\Driver\BulkWrite;

    $bulk->insert($request->all());

    Log::info($request->all());

    $conexion->executeBulkWrite('whatsappanalize.messages', $bulk);
});
