<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckList extends Model
{
    protected $fillable = [
        'incident',
        'system_affected',
        'affected_routine',
        'entity',
        'error_log',
        'external_contact',
        'responsible_team',
        'error_type',
        'impact',
        'incident_opening',
        'service_start',
        'description'
    ];
}
