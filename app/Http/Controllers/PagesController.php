<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display the home page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        $slides = Slide::all();
        return view('home', compact('slides'));
    }
}
