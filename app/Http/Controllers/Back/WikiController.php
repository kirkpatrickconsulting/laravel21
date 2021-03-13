<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

/**
 * Class WikiController
 *
 * @package App\Http\Controllers\Back
 */
class WikiController extends Controller {

    /**
     * WikiController constructor.
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showWiki() {

        $random = Str::random(32);
        $setToken = config(['wcr.token' => $random]);
        $getToken = config('wcr.token');

        return view('back.pages.wiki', ['data' => $getToken]);
    }

}
