<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    use HasFactory;

    public function category():BelongsTo
    {

        return $this->belongsTo(Category::class);
    }
    public function person_skill(): BelongsTo
    {
        return $this->belongsTo(Person_skill::class);
    }
}
