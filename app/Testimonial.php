<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    const IMAGE_PATH = 'uploads/customers/';

    protected $table = 'testimonial';
    protected $fillable = array(
        'id',
        'name',
        'image',
        'address',
        'message',
        'created_at',
        'updated_at'
    );
}