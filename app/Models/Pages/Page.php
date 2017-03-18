<?php

namespace App\Models\Pages;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $fillable = [
        'slug',
        'title',
        'header',
        'text',
        'on_off',
    ];

    public static function show($slug)
    {
        return DB::table('page')->where('slug', $slug)->get();
    }
}
