<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return
                [
                    'salutation' => 'min:2|max:25',
                    'first_name' => 'min:2|max:25',
                    'middle_name' => 'min:2|max:25',
                    'last_name' => 'min:2|max:25',
                    'email_address' => 'email|min:5|max:50',
                    'company' => 'min:5|max:30',
                    'job_title' => 'min:5|max:30',
                    'department' => 'min:5|max:30',
                    'website' => 'min:5|max:100|url',
                    'office_phone' => 'min:10|max:18',
                    'mobile_phone' => 'min:10|max:18',
                    'fax_number' => 'min:10|max:18',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
        return [
            'salutation.min' => 'Salutation must have a minimum of :min characters',
            'salutation.max' => 'Salutation must have a minimum of :max characters',
            'first_name.min' => 'First Name must have a minimum of :min characters',
            'first_name.max' => 'First Name must have a maximum of :max characters',
            'middle_name.min' => 'Middle Name must have a minimum of :min characters',
            'middle_name.max' => 'Middle Name must have a maximum of :max characters',
            'last_name.min' => 'Last Name must have a minimum of :min characters',
            'last_name.max' => 'Last Name must have a maximum of :max characters',
            'email.email' => 'Email must be a valid formatted email',
            'company.min' => 'Company must have a minimum of :min characters',
            'company.max' => 'Company must have a maximum of :max characters',
            'job_title.min' => 'Job Title must have a minimum of :min characters',
            'job_title.max' => 'Job Title must have a maximum of :max characters',
            'department.min' => 'Department must have a minimum of :min characters',
            'department.max' => 'Department must have a maximum of :max characters',
            'website.min' => 'Website must have a minimum of :min characters',
            'website.max' => 'Website must have a maximum of :max characters',
            'office_phone.min' => 'Office Phone must have a minimum of :min characters',
            'office_phone.max' => 'Office Phone must have a maximum of :max characters',
            'mobile_phone.min' => 'Mobile Phone must have a minimum of :min characters',
            'mobile_phone.max' => 'Mobile Phone must have a maximum of :max characters',
            'fax_number' => 'Fax Number must have a minimum of :min characters',
            'fax_number' => 'Fax Number must have a maximum of :max characters',
        ];
    }

}
