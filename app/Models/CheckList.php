<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckList extends Model
{
    protected $fillable = [
        'hourly',
        'weekday',
        'activity',
        'department',
        'entity',
        'task',
        'user_id',
        'status'
    ];
}
