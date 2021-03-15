<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * Class BlankpageController
 *
 * @package App\Http\Controllers\Back
 */
class BlankpageController extends Controller
{

    /**
     * @var Request
     */
    protected $request;

    /**
     * BlankpageController constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showBlankpage()
    {
        return view('back.pages.blankpage');
        // return view('back.pages.blankpage');
    }
}
