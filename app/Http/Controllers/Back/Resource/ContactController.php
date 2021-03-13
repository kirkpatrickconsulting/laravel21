<?php

namespace App\Http\Controllers\Back\Resource;

use App\Models\Contact;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateContactRequest;
use App\Http\Requests\StoreContactRequest;
use Redirect;
use Event;
use Session;
use Auth;

class ContactController extends Controller {

    /**
     * ContactController constructor.
     *
     * @param Request $request
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $user = Auth::user();
        $contacts = User::find($user->id)->contacts;
        return view('back.resources.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('back.resources.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request, Contact $contact) {

        $user = $request->user();
        $contact = new Contact([
            'salutation' => $request->salutation,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'company' => $request->company,
            'job_title' => $request->job_title,
            'department' => $request->department,
            'website' => $request->website,
            'office_phone' => $request->office_phone,
            'mobile_phone' => $request->mobile_phone,
            'fax_number' => $request->fax_number,
        ]);
        $contact->user()->associate($user);
        $contact->save();

        // Event::fire(new AddressCreated($address));

        Session::flash('message', 'New Contact has been created.');
        return Redirect::route('contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact) {
        if (is_null($contact)) {
            return Redirect::route('back.resources.contacts.index');
        }
        return view('back.resources.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact) {
        if (is_null($contact)) {
            return Redirect::route('back.resources.contacts.index');
        }
        return view('back.resources.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, $id) {

        $contact = Contact::find($id);
        $contact->salutation = $request->input('salutation');
        $contact->first_name = $request->input('first_name');
        $contact->middle_name = $request->input('middle_name');
        $contact->last_name = $request->input('last_name');
        $contact->email_address = $request->input('email_address');
        $contact->company = $request->input('company');
        $contact->job_title = $request->input('job_title');
        $contact->department = $request->input('department');
        $contact->website = $request->input('website');
        $contact->office_phone = $request->input('office_phone');
        $contact->mobile_phone = $request->input('mobile_phone');
        $contact->fax_number = $request->input('fax_number');
        $contact->save();

        Session::flash('message', 'Existing address has been edited.');
        return Redirect::route('contact.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact) {
        $contact->delete();
        Session::flash('alert-class', 'alert-danger');
        Session::flash('message', 'Existing contact has been deleted.');
        return Redirect::route('contact.index');
    }

}
