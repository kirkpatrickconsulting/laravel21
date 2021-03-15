<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class TestController
 *
 * @package App\Http\Controllers\Back
 */
class TestController extends Controller {

    /**
     * TestController constructor.
     */
    public function __construct() {
        $this->middleware(['auth:web', 'verified']);
    }

    public function index(Request $request) {
        return view('back.pages.test');
    }
}
