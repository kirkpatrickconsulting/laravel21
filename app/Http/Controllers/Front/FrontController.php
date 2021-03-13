<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

/**
 * Class FrontController
 *
 * @package App\Http\Controllers\Front
 */
class FrontController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showFront()
    {
        return view('front.pages.front');
    }
}