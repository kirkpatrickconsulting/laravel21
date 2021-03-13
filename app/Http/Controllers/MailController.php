<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use Illuminate\Http\Request;

/**
 * Class MailController
 * @package App\Http\Controllers
 */
class MailController extends Controller
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * MailController constructor.
     * @param Request $request
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function mailContact()
    {    
        $this->validate($this->request, [
           'name' => 'required|min:3|max:255',
           'phone' => 'required|min:10|max:10',
           'email' => 'required|min:5|email|max:255',
           'messagetext' => 'required|min:3|max:255',
           'g-recaptcha-response' => 'required|recaptcha',
        ]);
        
        $data = array('name' => $this->request->name,
                      'phone' => $this->request->phone,
                      'email' => $this->request->email,
                      'messagetext' => $this->request->messagetext)
        ;
        
        Mail::send('front.emails.emailcontact', $data, function ($message) {
        $message->from($this->request->email, $this->request->name);
        $message->to('kirkpatrickconsulting@gmail.com');
        });
        
        Session::flash('message', 'Your message has been sent.'); 
        return redirect('/');        
    }
}
