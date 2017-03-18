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
        if ('winter' === $slug) {
            return view('tires.season', ['tires' => Tire::getBySeason('Зима')]);
        } elseif ('summer' === $slug) {
            return view('tires.season', ['tires' => Tire::getBySeason('Лето')]);
        } elseif ('all-weather' === $slug) {
            return view('tires.season', ['tires' => Tire::getBySeason('Всесезонная')]);
        }
    }
}
