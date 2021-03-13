<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Redirect;
use Event;
use Session;

class AddressController extends Controller {

    /**
     * @var Request
     */
    protected $request;

    /**
     * AddressController constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $addresses = Address::all();
        return view('back.resources.addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('back.resources.addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Address $address) {
        $this->validate($this->request, [
            'street' => 'nullable|max:255|min:3',
            'street_2' => 'nullable|max:255|min:3',
            'city' => 'nullable|max:255|min:4',
            'state' => 'nullable|alpha|max:2|min:2',
            'post_code' => 'nullable|digits:5',
            'country_id' => 'nullable|max:2|min:2',
            'user_id' => 'required|max:255|min:1',
        ]);

        $address = Address::create([
                    'street' => $this->request->street,
                    'street_2' => $this->request->street_2,
                    'city' => $this->request->city,
                    'state' => $this->request->state,
                    'post_code' => $this->request->post_code,
                    'country_id' => $this->request->country_id,
                    'user_id' => $this->request->user_id,
        ]);

        // Event::fire(new AddressCreated($address));

        Session::flash('message', 'New Address has been created.');
        return Redirect::route('address.index');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show(Address $address) {
        if (is_null($address)) {
            return Redirect::route('address.index');
        }
        return view('back.resources.addresses.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address) {
        if (is_null($address)) {
            return Redirect::route('address.index');
        }
        return view('back.resources.addresses.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddressRequest $request, $id) {
        
        $address = Address::find($id);
        $address->street = $this->request->input('street');
        $address->street_2 = $this->request->input('street_2');
        $address->city = $this->request->input('city');
        $address->state = $this->request->input('state');
        $address->post_code = $this->request->input('post_code');
        $address->country_id = $this->request->input('country_id');
        $address->save();
        
        Session::flash('message', 'Existing address has been edited.');
        return Redirect::route('address.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address) {
        $address->delete();
        Session::flash('alert-class', 'alert-danger');
        Session::flash('message', 'Existing address has been deleted.');
        return Redirect::route('address.index');
    }

}