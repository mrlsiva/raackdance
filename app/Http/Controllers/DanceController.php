<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanceController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     */
    public static function getStudiosList()
    {
        $studios = array(
            "Tambaram" => "Tambaram",
            "Mylapore" => "Mylapore",
            "Velachery" => "Velachery",
            "Perungalathur" => "Old Perungalathur",
            "Mogappair" => "Mogappair",
            "Avadi" => "Avadi",
            "Sholinganallur" => "Sholinganallur",
            "Thoraipakkam" => "Thoraipakkam",
            "Neelankarai" => "Neelankarai",
            "Ramapuram" => "Ramapuram",
            "Mugalivakkam" => "Mugalivakkam",
            "Keelkattalai" => "Keelkattalai",
            "Saidapet" => "Saidapet",
            "Pallikaranai" => "Pallikaranai",
            "Kilpauk" => "Kilpauk",
            "Kolathur" => "Kolathur",
            "Guduvanchery" => "Guduvanchery",
            "Pondicherry" => "Pondicherry",
            "Cuddalore" => "Cuddalore"
        );
        return $studios;
    }
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
