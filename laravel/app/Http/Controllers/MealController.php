<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;


class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('example');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $meal1 = Meal::create([
        'customer_id' => 1, 
        'name' => 'Grilled Chicken',
        'total_calories' => 250,
        'meal_date' => now()->toDateString(), 
        'meal_time' => now()->toTimeString(),
    ]);

    $meal2 = Meal::create([
        'customer_id' => 1, 
        'name' => 'Vegetable Soup',
        'total_calories' => 100,
        'meal_date' => now()->toDateString(), 
        'meal_time' => now()->toTimeString(),
    ]);
        dd('Öğünler başarıyla eklendi:', $meal1, $meal2);
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
