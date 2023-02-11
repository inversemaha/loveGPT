<?php

use App\Http\Controllers\Api\ApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => "v1", 'middleware' => ['api_auth']], function () {

    Route::any('/tour', [ApiController::class, 'tourOne']);
    Route::any('/tour-one', [ApiController::class, 'tourOne']);
    Route::any('/tour-two', [ApiController::class, 'tourTwo']);
    Route::any('/participant/store', [ApiController::class, 'participantStore']);
    Route::any('/status', [ApiController::class, 'status']);

});

