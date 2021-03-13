<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Event;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class UserController extends Controller {

    /**
     * @var Request
     */
    protected $request;

    /**
     * UserController constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->request = $request;
//        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index', 'store']]);
//        $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
//        $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        //$users = User::all();

        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('back.resources.users.index', compact('data'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);

        //return view('back.resources.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $roles = Role::pluck('name', 'name')->all();
        return view('back.resources.users.create', compact('roles'));

        //return view('back.resources.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                        ->with('success', 'User created successfully');

//        $this->validate($this->request, [
//            'name' => 'required|max:255|min:4',
//            'email' => 'required|max:255|unique:users|email',
//            'password' => 'required|min:7|confirmed',
//        ]);
//
//        $user = User::create([
//                    'name' => $this->request->name,
//                    'email' => $this->request->email,
//                    'password' => bcrypt($this->request->password),
//        ]);
//
//        $user = User::with('phone')->findOrFail($user->id);
//        $phone = new Phone();
//        $user->phone()->save($phone);
//
//        $user = User::with('address')->findOrFail($user->id);
//        $address = new Address();
//        $user->address()->save($address);
//
//        $user->save();
//
//        // Event::fire(new UserCreated($user));
//
//        Session::flash('message', 'New user has been created.');
//        return Redirect::route('users.index');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show($id) {
        $user = User::find($id);
        return view('back.resources.users.show', compact('user'));

//        if (is_null($user)) {
//            return Redirect::route('users.index');
//        }
//        return view('back.resources.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('back.resources.users.edit', compact('user', 'roles', 'userRole'));

//        if (is_null($user)) {
//            return Redirect::route('users.index');
//        }
//
//        return view('back.resources.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                        ->with('success', 'User updated successfully');


//        $id = $user->id;
//        $this->validate($this->request, [
//            'name' => 'required|max:255|min:4',
//        ]);
//
//        $user->update([
//            'name' => $this->request->name,
//        ]);
//
//        Session::flash('message', 'Existing user has been edited.');
//        return Redirect::route('users.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success', 'User deleted successfully');

//        $user->delete();
//        Session::flash('alert-class', 'alert-danger');
//        Session::flash('message', 'Existing user has been deleted.');
//        return Redirect::route('users.index');
    }

}
