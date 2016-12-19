<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'lead';
    protected $fillable = array(
        'id',
        'location',
        'lead_type',
        'preferences',
        'price_range',
        'home_type',
        'time_frame',
        'agent_hero',
        'fullname',
        'email',
        'phone',
        'created_at',
        'updated_at'
    );
}