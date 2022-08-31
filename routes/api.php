<?php

namespace App\RequestHandlers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(
    ["prefix" => "v1"], function () {
    Route::group(["prefix" => "vulnerabilities"], function () {
        Route::get('/', Vulnerability\ListVulnerabilitiesHandler::class);
        Route::get('/{uuid}', Vulnerability\FetchVulnerabilityHandler::class);
        Route::put('/{uuid}', Vulnerability\EditVulnerabilityHandler::class);
        Route::delete('/{uuid}', Vulnerability\DeleteVulnerabilityHandler::class);
        Route::post('/create', Vulnerability\CreateVulnerabilityHandler::class);
    });
}
);
