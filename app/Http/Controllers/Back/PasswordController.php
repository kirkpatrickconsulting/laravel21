<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    
      /**
     * TestController constructor.
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function showPasswordForm() {
        return view('back.resources.users.password-edit');
    }  

}
