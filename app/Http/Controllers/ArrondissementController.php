<?php

namespace App\Http\Controllers;

use App\Models\Arrondissement;
use App\Http\Requests\StoreArrondissementRequest;
use App\Http\Requests\UpdateArrondissementRequest;

class ArrondissementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arrondissements = Arrondissement::all();
        
        // Return the view with the data
        return view('arrondissements.index', compact('arrondissements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArrondissementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Arrondissement $arrondissement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Arrondissement $arrondissement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArrondissementRequest $request, Arrondissement $arrondissement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arrondissement $arrondissement)
    {
        //
    }
}
