<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tire extends Model
{
    public $fillable = [
        'slug',
        'standardSize',
        'dia',
        'season',
        'brand',
        'model',
        //сколько всего есть штук
        'amount',
        'specification',
    ];

    public static function getAllTires()
    {
        return DB::table('tires')->paginate(15);
    }

    public static function getOneTire($slug)
    {
        return DB::table('tires')->where('slug', $slug)->leftJoin('tires_quantity', 'tires.id', '=', 'tires_quantity.tires_id' )
            ->leftJoin('images', 'tires.id', '=', 'images.tires_id')->get();
    }

    public static function getBySeason($season)
    {
        if (!isset($season) || false === $season) {
            return abort(404);
        }
        return DB::table('tires')->where('season', $season)->paginate(15);
    }
}
