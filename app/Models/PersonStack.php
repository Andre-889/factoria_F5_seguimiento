<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PersonStack extends Model
{
    protected $table = "person_stack";
    use HasFactory;

    public function stacks(): BelongsToMany
{
    return $this->belongsToMany(Stack::class, 'person_stack', 'id', 'stack_id')
                ->withPivot('level', 'person_id');
}
    
    
}
