<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    const IMAGE_PATH = 'uploads/partners/';

    protected $table = 'partner';
    protected $fillable = array(
        'id',
        'url',
        'image',
        'created_at',
        'updated_at'
    );
}