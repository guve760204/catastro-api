<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionRejectionTypeCollection;
use App\Models\Transaction_rejection_type;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransaction_rejection_typeRequest;
use App\Http\Requests\UpdateTransaction_rejection_typeRequest;

class TransactionRejectionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rejections = Transaction_rejection_type::all();
        return new TransactionRejectionTypeCollection($rejections);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaction_rejection_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction_rejection_type $transaction_rejection_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaction_rejection_typeRequest $request, Transaction_rejection_type $transaction_rejection_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction_rejection_type $transaction_rejection_type)
    {
        //
    }
}
