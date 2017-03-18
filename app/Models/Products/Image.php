<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $fillable = [
        'name',
        'order',
        'imagePriority',
    ];
}
