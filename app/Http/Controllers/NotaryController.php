<?php

namespace App\Http\Controllers;

use App\Http\Resources\NotaryCollection;
use App\Models\Notary;
use App\Http\Requests\StoreNotaryRequest;
use App\Http\Requests\UpdateNotaryRequest;

class NotaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notaries = Notary::all();
        return new NotaryCollection($notaries);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Notary $notary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotaryRequest $request, Notary $notary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notary $notary)
    {
        //
    }
}
