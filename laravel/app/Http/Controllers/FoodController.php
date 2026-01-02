<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food; 
use App\Models\Meal; 


class FoodController extends Controller
{
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
    public function createTestFood()
{
    $food = Food::create([
        'meal_id' => 1, 
        'name' => 'Tavuk Göğsü',
        'calories' => 165,
        'serving_size' => '100g' 
    ]);
    dd("Yeni Besin Oluşturuldu:", $food);
}

public function listFoods()
{
    $foods = Food::all();
    dd("Tüm Besinler (Adet: " . $foods->count() . "):", $foods);
}

}
