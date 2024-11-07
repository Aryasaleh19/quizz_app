<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    protected $guarded = [
        'id'
    ];

    public function kelas(): HasMany
    {
        return $this->hasMany(Quiz::class, 'kelas_id');
    }
}
