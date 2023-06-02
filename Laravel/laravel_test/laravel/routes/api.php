<?php

use App\Http\Controllers\ApiUserController;
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

//            * 주소는 되도록 복수형으로 사용
Route::get('/users/{email}', [ApiUserController::class, 'getuser']); // 세그먼트 파라미터는 유저가 주는 값. id는 내부에서 쓰는 값이므로 유저는 알 수 없어서 이메일로 쓴다.
Route::post('/users', [ApiUserController::class, 'postuser']);
Route::put('/users/{email}', [ApiUserController::class, 'putuser']);
Route::delete('/users/{email}', [ApiUserController::class, 'deleteuser']);