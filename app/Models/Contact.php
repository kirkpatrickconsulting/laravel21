<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'salutation', 'first_name', 'middle_name', 'last_name', 'email_address', 'company', 'job_title', 'department', 'website', 'office_phone', 'mobile_phone', 'fax_number',
    ];

    /**
     * Get the user that owns the phone.
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}
