<?php

namespace App\Traits;

use Illuminate\Http\Request;
use App\Models\Contact;
use Log;

trait LoggingTrait {

    /**
     * @var Request
     * @var $view
     * @var $data
     * @var $options 
     * 
     */
    protected $request;

    /**
     * AddressController constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function logEntry(Login $event, $validatedData) {

        $name = $event->user->name;
        $email = $event->user->email;
        Log::info('Login Successful: ' . $name . ' ' . $email);

        return back()->with('success', 'Thanks for contacting us!');
    }
}
