<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Quiz extends Model
{
    //
    protected $guarded = [
        'id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class, 'quiz_id');
    }

    public function results(): HasOne
    {
        return $this->hasOne(Result::class, 'quiz_id');
    }
}
