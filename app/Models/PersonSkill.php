<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PersonSkill extends Model
{
    use HasFactory;
    public function skills(): HasMany 
    {
        return $this->hasMany(Skill::class);
    }
}
