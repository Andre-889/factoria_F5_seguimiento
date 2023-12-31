<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Stack extends Model
{
    use HasFactory;

    public function evaluationStacks(): BelongsToMany
    {
        return $this->belongsToMany(EvaluationStack::class, 'evaluation_stack', 'stack_id', 'id')
                    ->withPivot('level');
    }

    public function bootcampStack(): BelongsToMany
    {
        return $this->belongsToMany(BootcampStack::class, 'bootcamp_stack', 'stack_id', 'id');
    }

    public function skills(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }
    
}
