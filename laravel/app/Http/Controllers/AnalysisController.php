<?php

namespace App\Http\Controllers;
use App\Models\CalorieAnalysis;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    public function performAnalysis()
    {
        
        $analysis = CalorieAnalysis::firstOrCreate(
            ['student_id' => '0515250044'], 
            [
                'status_message' => 'Daily Calorie Analysis System is Operational',
                'total_exceeded_meals' => 4 
            ]
        );

        return response()->json([
            'success' => true,
            'student_name' => 'Ebrar K.',
            'student_id' => $analysis->student_id,
            'analysis_result' => 'Check Successful',
            'analysis_data' => 'Sample Meals Exceeded Count: ' . $analysis->total_exceeded_meals,
            'message' => 'Analysis Result: Based on your records, there is a risk of exceeding your daily calorie limit. Please pay attention to balanced nutrition.'
        ]);
    }
}
