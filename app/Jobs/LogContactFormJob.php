<?php

namespace App\Jobs;

use App\Events\ContactFormSaved;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Log;

class LogContactFormJob implements ShouldQueue {

    use Dispatchable,
        InteractsWithQueue,
        Queueable,
        SerializesModels;

    protected $event;

    /**
     * Create a new event instance.
     *
     * @param \App\ContactFormSaved $event
     */
    public function __construct(ContactFormSaved $event) {
        $this->event = $event;
        Log::info('Log Job construct :'. $this->event->contactform);
    }

    /**
     * Handle the event.
     *
     * @param  ContactFormSaved  $event
     * @return void
     */
    public function handle() {
        //dd($this->contactform);
        Log::info('Log Job handler : ' . $this->event->contactform);
    }

}
