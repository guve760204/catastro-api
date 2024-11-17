<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use App\Http\Requests\StoreCostumerRequest;
use App\Http\Requests\UpdateCostumerRequest;

class CostumerController extends Controller
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
    public function store(StoreCostumerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Costumer $costumer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCostumerRequest $request, Costumer $costumer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Costumer $costumer)
    {
        //
    }
}
