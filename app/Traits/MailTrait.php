<?php
  
namespace App\Traits;
  
use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Event\ContactSaved;
use Mail;
  
trait MailTrait {
    
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

    public function sendMail($view, $validatedData, $options) {
             

        
        Mail::send($view['view'], $validatedData , function($message) use ($validatedData) {
            $message->from($validatedData['email'], $validatedData['name']);
            $message->to(config('mail.from.address'), config('mail.from.name'))->subject('Contact Form');
        });
        

        
        //Event Email Sent       
        //Event Log Event Created

        return back()->with('success', 'Thanks for contacting us!');
    }
    
 }
    
