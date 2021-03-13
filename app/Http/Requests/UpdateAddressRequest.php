<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAddressRequest extends FormRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'street' => 'min:3|max:255',
            'street_2' => 'min:3|max:255',
            'city' => 'min:3|max:255',
            'state' => 'min:2|max:15',
            'post_code' => 'min:5|max:12',
            'country_id' => 'min:2|max:2',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
        return [
            'street.min' => 'Street must have a minimum of :min characters',
            'street.max' => 'Street must have a minimum of :max characters',
            'street_2.min' => 'Street 2 must have a minimum of :min characters',
            'street_2.max' => 'Street 2 must have a maximum of :max characters',
            'city.min' => 'City must have a minimum of :min characters',
            'city.max' => 'City Name must have a maximum of :max characters',
            'state.min' => 'State must have a minimum of :min characters',
            'state.max' => 'State Name must have a maximum of :max characters',
            //'state.alpha' => 'State Name must be compised of letters',
            'post_code.min' => 'Zip Code must have a minimum of :min characters',
            'post_code.max' => 'Zip Code must have a maximum of :max characters',
            'country_id.min' => 'Job Title must have a minimum of :min characters',
            'country_id.max' => 'Job Title must have a maximum of :max characters',
        ];
    }

}
