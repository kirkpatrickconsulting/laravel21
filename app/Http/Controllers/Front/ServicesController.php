<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

/**
 * Class ServicesController
 * 
 * @package App\Http\Controllers\Front
 */
class ServicesController extends Controller
{
    /**
     * Show the Services Page.
     *
     * @return Response
     */
    public function showServices()
    {
        return view('front.pages.services');
    }
}