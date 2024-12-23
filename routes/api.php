<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailNotificationController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NotaryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionRejectionController;
use App\Http\Controllers\TransactionRejectionTypeController;
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
    Route::patch('transactions/{transaction}/set_attendant', [TransactionController::class, 'setAttendant']);
    Route::patch('transactions/{transaction}/accept_transaction', [TransactionController::class, 'acceptTransaction']);
    Route::patch('transactions/{transaction}/reject_transaction', [TransactionController::class, 'rejectTransaction']);
    Route::patch('transactions/{transaction}/deliver_transaction', [TransactionController::class, 'deliverTransaction']);

    //Users routes
   Route::resource('users', UserController::class);

   //Transaction type resources
    Route::resource('transaction_types', TransactionTypeController::class);

    //Media Routes
    Route::post('transactions/{transaction}/media/upload_blueprint', [MediaController::class, 'uploadBlueprint']);

    //Agents Routes
    Route::resource('agents', AgentController::class);

    //Notary Routes
    Route::Resource('notaries', NotaryController::class);

    //Rejection Routes
    Route::post('transactions/{transaction}/rejections', [TransactionRejectionController::class, 'store']);

    //Transaction rejection type routes
    Route::Resource('transaction_rejection_types', TransactionRejectionTypeController::class);

    //email notifications
    Route::post('email_notifications/notify_all_agents', [EmailNotificationController::class, 'notifyAllAgents']);
    Route::post('email_notifications/notify_email', [EmailNotificationController::class, 'notifyEmail']);
    //...
});
