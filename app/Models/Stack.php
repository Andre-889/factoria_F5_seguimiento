<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    use HasFactory;

    public function personStack(){

        return $this->belongsToMany(PersonStack::class);

    }
    
}
