<?php

namespace App\Http\Controllers\Front;

use App\Models\ContactForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;
//use App\Traits\MailTrait;

/**
 * Class ContactController
 * 
 * @package App\Http\Controllers\Front
 */
class ContactFormController extends Controller {

    //use MailTrait;

    /**
     * Show the Contact Page.
     *
     * @return Response
     */
    public function showContactForm() {
        return view('front.pages.contact');
    }

    public function postContactForm(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|min:4|max:30',
            'phone' => 'required|min:10|max:18',
            'email' => 'required|email',
            'messagetext' => 'required|min:5|max:200'
                ], [
            'name.required' => 'Name is required',
            'name.min' => 'Name must have a minimum of :min characters',
            'name.max' => 'Name must have a maximum of :max characters',
            'phone.required' => 'Phone is required',
            'phone.min' => 'Phone must have a minimum of :min characters',
            'phone.max' => 'Phone must have a maximum of :max characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid formatted email',
            'messagetext.required' => 'Message text is required',
            'messagetext.min' => 'Message text must have a minimum of :min characters',
            'messagetext.max' => 'Message text must have a maximum of :max characters'
        ]);

        //$view = array('view' => 'front.emails.emailcontact');
        //$options = array(
        //);
        //ContactFormSaved::dispatch($validatedData);
        //$this->sendMail($view, $validatedData, $options);

        //dd($validatedData);
        
        Log::info('Pre DB call ContactController');
        
        ContactForm::create($validatedData);
        
        Log::info('Post DB call ContactController');

        return back()->with('success', 'Thanks for contacting us!');
    }

}
