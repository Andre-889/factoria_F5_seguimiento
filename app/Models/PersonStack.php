<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonStack extends Model
{
    use HasFactory;

    public function stacks()
    {
        return $this->belongsToMany(Stack::class);
    }
    
}
