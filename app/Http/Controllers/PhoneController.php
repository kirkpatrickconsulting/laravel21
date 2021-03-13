<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Redirect;
use Event;
use Session;

class PhoneController extends Controller {

    /**
     * @var Request
     */
    protected $request;

    /**
     * PhoneController constructor.
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
        $phones = Phone::all();
        return view('back.resources.phones.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('back.resources.phones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Phone $phone) {
        $this->validate($this->request, [
            'phone' => 'nullable|max:18|min:7',
        ]);

        $phone = Phone::create([
                    'phone' => $this->request->phone,
        ]);

        // Event::fire(new PhoneCreated($phone));

        Session::flash('message', 'New phone has been created.');
        return Redirect::route('phone.index');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show(Phone $phone) {
        if (is_null($phone)) {
            return Redirect::route('phone.index');
        }
        return view('back.resources.phones.show', compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone) {
        if (is_null($phone)) {
            return Redirect::route('phone.index');
        }
        return view('back.resources.phones.edit', compact('phone'));
    }

    /**
     * Update the specified resource in stora.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($this->request, [
            'phone' => 'required|max:18|min:7',
        ]);
 
        $phone = Phone::find($id);
        $phone->phone = $request->input('phone');
        $phone->save();

        Session::flash('message', 'Existing phone has been edited.');
        return Redirect::route('phone.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone) {
        $phone->delete();
        Session::flash('alert-class', 'alert-danger');
        Session::flash('message', 'Existing phone has been deleted.');
        return Redirect::route('phone.index');
    }

}
