<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function Illuminate\Validation\message;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private static $user;
    public function index()
    {
        return view('admin.user.manage-user',[
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::saveUser($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.user.edit-user',[
           'user' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        self::$user = User::find($id);
        if (password_verify($request->old_password, self::$user->password)) {

            User::saveUpdate($request, $id);
            return redirect(route('users.index'))->with('message', 'update');
        } else{
            return back()->with('message', 'Old password incorrect');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
