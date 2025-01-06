<?php

namespace App\Http\Controllers;

use App\Http\Resources\AgentCollection;
use App\Models\Agent;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use Illuminate\Http\Request;


class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();
        return new AgentCollection($agents);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agent $agent)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'phone' => 'required | string | max:25',
            'email' => 'required | email',
            'address' => 'nullable | string | max:255',
        ]);

        $agent->update($request->all());

        return response()->json(['ok'=>true, 'msg'=>'Información del perito actualizada correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
