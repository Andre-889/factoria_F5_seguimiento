<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BootcampStack extends Model
{
    protected $table = 'bootcamp_stack';
    use HasFactory;

    
    public function stacks(): BelongsToMany
{
    return $this->belongsToMany(Stack::class, 'bootcamp_stack', 'id', 'stack_id');
}

}
