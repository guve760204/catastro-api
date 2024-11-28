<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/prueba', function (){
    $transactions = \App\Models\Transaction::with('agent', 'notary', 'costumer')->get();
    return new \App\Http\Resources\TransactionCollection($transactions);
});

Route::post('/landing_page_info', [\App\Http\Controllers\GuestController::class, 'landingPageInfo']);

//Route::post(RoutePath::for('login', '/login'), [AuthController::class, 'login']);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){

    //auth routes
    Route::post('verify_token', [AuthController::class, 'verifyToken']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('get_logged_in_user', [AuthController::class, 'getLoggedInUser']);

    //Transaction Routes
    Route::resource('transactions', TransactionController::class);

    //Users routes
   Route::resource('users', UserController::class);

   //Transaction type resources
    Route::resource('transaction_types', TransactionTypeController::class);

    //Media Routes
    Route::post('transactions/{transaction}/media/upload_blueprint', [MediaController::class, 'uploadBlueprint']);


    //...
});
