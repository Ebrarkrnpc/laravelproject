<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise; 
use App\Models\Customer; 
use App\Models\Activity; 

class ExerciseController extends Controller
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
        // customer_id: 1 ve activity_id: 1 olduğunu varsayıyoruz.
    $exercise1 = Exercise::create([
        'customer_id' => 1, 
        'activity_id' => 1, 
        'duration_minutes' => 30,
        'calories_burned' => 300, 
        'exercise_date' => now()->toDateString(), 
    ]);
    
    $exercise2 = Exercise::create([
        'customer_id' => 1, 
        'activity_id' => 1, 
        'duration_minutes' => 15,
        'calories_burned' => 150, 
        'exercise_date' => now()->toDateString(), 
    ]);
    
    dd('Egzersizler başarıyla eklendi:', $exercise1, $exercise2);
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
    public function createTestExercise()

public function listExercises()
{
    $exercises = Exercise::all();
    dd("Tüm Egzersizler (Adet: " . $exercises->count() . "):", $exercises);
}
}
