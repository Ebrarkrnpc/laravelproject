<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    
protected $guarded = ['id'];

public function customer(){
    return belongsTo(customer::class);
}

public function exercise(){
    return belongsTo(exercise::class);
}





    
}
