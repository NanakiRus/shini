<?php

namespace App\Http\Controllers;

use App\Models\Pages\Page;

class PageController extends Controller
{
    public function index($slug)
    {
        $pageSlug = Page::show($slug);
        if (!isset($pageSlug[0])) {
            return abort(404);
        }
        return view('page', ['page' => Page::show($slug)]);
    }
}
