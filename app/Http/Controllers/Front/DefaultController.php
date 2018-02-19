<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Slide;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    /**
     * Display the home page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        $slides = Slide::all();
        return view('front.default.home', compact('slides'));
    }
}
