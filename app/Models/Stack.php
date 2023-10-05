<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Stack extends Model
{
    use HasFactory;

    public function personStacks(): BelongsToMany
    {
        return $this->belongsToMany(PersonStack::class, 'person_stack', 'stack_id', 'id')
                    ->withPivot('level', 'person_id');
    }

    public function bootcampStack(): BelongsToMany
    {
        return $this->belongsToMany(BootcampStack::class, 'bootcamp_stack', 'stack_id', 'id');
    }
    
}
