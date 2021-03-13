<?php

namespace App\Models;

use App\Events\ContactFormSaved;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Log;

/**
 * App\Models\ContactForm
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $messagetext
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContactForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactForm query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactForm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactForm whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactForm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactForm whereMessagetext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactForm whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactForm wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactForm whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
