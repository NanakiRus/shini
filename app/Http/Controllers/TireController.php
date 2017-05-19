<?php

namespace App\Http\Controllers;

use App\Models\Products\Tire;

class TireController extends Controller
{
    public function index()
    {
        return view('tires.all', ['tires' => Tire::getAllTires()]);
    }

    public function show($season = null, $slug = null)
    {
        $url = (empty($slug)) ? $season : $slug;
        return view('tires.one', ['tire' => Tire::getOneTire($url)]);
    }

    public function showBySeason($slug)
    {
        $season = false;

        switch ($slug) {
            case 'winter':
                $season = 'winter';
                break;
            case 'summer':
                $season = 'summer';
                break;
            case 'all-weather':
                $season = 'all-weather';
                break;
        }

        return view('tires.season', ['tires' => Tire::getBySeason($season)]);
    }
}
