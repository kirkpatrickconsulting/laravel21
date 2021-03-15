<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;


/**
 * Class WeatherController
 *
 * @package App\Http\Controllers\Back
 */
class WeatherController extends Controller
{

    /**
     * WeatherController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth:web', 'verified']);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showWeather()
    {
        return view('back.pages.weather');
    }
}
