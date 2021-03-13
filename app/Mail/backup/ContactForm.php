<?php

namespace App\Models;

use App\Events\ContactFormSaved;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Log;

class ContactForm extends Model {

    use HasFactory;

    public $table = 'contactform';
    public $fillable = ['name', 'phone', 'email', 'messagetext'];
    protected $dispatchesEvents = ['created' => ContactFormSaved::class,];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {

        parent::boot();

        Log::info('ContactForm model boot');
        
//        /**
//         * Write code on Method
//         *
//         * @return response()
//         */
//        static::creating(function($contactform) {
//            //Log::info('Creating Model ContactForm: ' . $contactform);
//        });
//
//        /**
//         * Write code on Method
//         *
//         * @return response()
//         */
//        static::created(function($contactform) {
//            //Log::info('Model ContactForm Created: ' . $contactform);
//        });
    }

}
