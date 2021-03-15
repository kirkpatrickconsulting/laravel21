<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;


/**
 * Class DashboardController
 *
 * @package App\Http\Controllers\Back
 */
class DashboardController extends Controller
{

    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth:web', 'verified']);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showDashboard()
    {
        return view('back.pages.dashboard');
    }
}
