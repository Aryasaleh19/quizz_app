<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    protected $guarded = [
        'id',

    ];

    public function choices(): HasMany
    {
        return $this->hasMany(Choice::class, 'question_id');
    }

    public function quizz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }
}
