<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalorieAnalysis extends Model
{
  use HasFactory; 

    
    protected $fillable = [
        'student_id',
        'status_message',
        'total_exceeded_meals',
        'created_at',
        'updated_at'
    ];
    
    
    protected $table = 'calorie_analyses';
}
