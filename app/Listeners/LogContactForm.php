<?php

namespace App\Listeners;

use App\Models\ContactForm;
use App\Events\ContactFormSaved;
use App\Jobs\LogContactFormJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Log;

class LogContactForm {

    /**
     * Create a new event instance.
     *
     * @param \App\ContactForm $contactform
     */
    public function __construct() {
        
    }

    /**
     * Handle the event.
     *
     * @param  ContactFormSaved  $event
     * @return void
     */
    public function handle(ContactFormSaved $event) {
        Log::info('Log listener handle : ' . $event->contactform);

        LogContactFormJob::dispatch($event);
    }

}
