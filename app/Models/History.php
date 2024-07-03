<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class History extends Model
{
    use HasFactory;

    protected $table = 'histories';

    protected $guarded = [];

    public function people(): BelongsTo
    {
        return $this->belongsTo(People::class, 'people_id');
    }

    public function answers(): HasMany
    {
        return $this->hasMany(HistoryAnswer::class, 'history_id');
    }
}
