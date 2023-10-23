<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EvaluationStack extends Model
{
    use HasFactory;
    protected $table = "evaluation_stack";

    public function stacks(): BelongsToMany
    {
        return $this->belongsToMany(Stack::class, 'evaluation_stack', 'id', 'stack_id');
    }

    public function evaluations(): BelongsToMany
    {
        return $this->belongsToMany(Evaluation::class, 'evaluation_stack', 'id', 'evaluation_id');
    }
    
    
}