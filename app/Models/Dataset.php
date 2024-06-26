<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dataset extends Model
{
    use HasFactory;

    protected $table = 'datasets';

    protected $guarded = [];

    public function answers(): HasMany
    {
        return $this->hasMany(DatasetAnswer::class, 'dataset_id');
    }
}
