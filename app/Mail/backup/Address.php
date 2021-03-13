<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'street', 'street_2', 'city', 'state', 'post_code', 'country_id', 'user_id',
    ];

    /**
     * Get the user that owns the phone.
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}
