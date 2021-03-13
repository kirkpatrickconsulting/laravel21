<?php

namespace App\Jobs;

use App\Events\ContactFormSaved;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use Log;

class SendContactFormJob implements ShouldQueue {

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
        Log::info('Send Job construct :'. $this->event->contactform);
    }

    /**
     * Handle the event.
     *
     * @param  ContactFormSaved  $event
     * @return void
     */
    public function handle() {
        //dd($this->contactform);
        Log::info('Send Job handler : ' . $this->event->contactform);
        
        $validatedData = ([
            'name' => $this->event->contactform->name,
            'phone' => $this->event->contactform->phone,
            'email' => $this->event->contactform->email,
            'messagetext' => $this->event->contactform->messagetext,
        ]);

        $view = array('view' => 'front.emails.emailcontact');

        $options = array(
        );

        Mail::send($view['view'], $validatedData, function($message) use ($validatedData) {
            $message->from($validatedData['email'], $validatedData['name']);
            $message->to(config('mail.from.address'), config('mail.from.name'))->subject('Submitted Contact Form');
        });
    }

}
