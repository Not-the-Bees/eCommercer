<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Slide;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    /**
     * Display the home admin page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('back.default.home');
    }

    public function content()
    {
        return view('back.content.index');
    }

    public function interfaceHome()
    {
        return view('back.interface.index');
    }
}
