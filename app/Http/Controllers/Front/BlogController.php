<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

/**
 * Class BlogController
 * 
 * @package App\Http\Controllers\Front
 */
class BlogController extends Controller
{
    /**
     * Show the Blog Page.
     *
     * @return Response
     */
    public function showBlog()
    {
        return view('front.pages.blog');
    }
}