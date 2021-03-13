<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

/**
 * Class AboutController
 * 
 * @package App\Http\Controllers\Front
 */
class AboutController extends Controller
{
    /**
     * Show the About Page.
     *
     * @return Response
     */
    public function showAbout()
    {
        return view('front.pages.about');
    }
}