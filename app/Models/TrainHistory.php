<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainHistory extends Model
{
    use HasFactory;

    protected $table = 'train_histories';

    protected $guarded = [];
}
