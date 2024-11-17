<?php

namespace App\Http\Controllers;

use App\Models\TransactionStatus;
use App\Http\Requests\StoreTransactionStatusRequest;
use App\Http\Requests\UpdateTransactionStatusRequest;

class TransactionStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TransactionStatus $transactionStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionStatusRequest $request, TransactionStatus $transactionStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionStatus $transactionStatus)
    {
        //
    }
}
