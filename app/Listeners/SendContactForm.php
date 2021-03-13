<?php

namespace App\Listeners;

use App\Models\ContactForm;
use App\Events\ContactFormSaved;
use App\Jobs\SendContactFormJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Log;

class SendContactForm {

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

        Log::info('Send listener handle : ' . $event->contactform);

        //SendContactFormJob::dispatch($event)->delay(now()->seconds(60));
    }

}
