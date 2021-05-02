<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emailActive = auth()->user()->email;
        if($emailActive == 'admin@admin.com'){
            $users = User::all();
        }
        else if($emailActive != 'admin@admin.com'){
            $users = User::where('email', $emailActive)->get();
        }
        return view('administrators.users.index', compact('users'));
    }

    public function archive()
    {
        if(auth()->user()->email == 'admin@admin.com'){
            $users = User::onlyTrashed()->get();
            return view('administrators.users.trash', compact('users'));
        }
        else if(auth()->user()->email != 'admin@admin.com'){
            return redirect()->back();
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emailActive = auth()->user()->email;
        if($emailActive == 'admin@admin.com'){
            return view('administrators.users.create');
        }
        else if($emailActive != 'admin@admin.com'){
            return redirect()->back()->with('failed', 'You do not have the authority to access this feature!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('success', 'Add User Successed!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findorfail($id);
        return view('administrators.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->get();
        if($user[0]->email != "admin@admin.com"){
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
    
            User::where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }
        else if($user[0]->email == "admin@admin.com"){
            $request->validate([
                'name' => 'required',
                'password' => 'required',
            ]);
    
            User::where('id', $id)
            ->update([
                'name' => $request->name,
                'password' => Hash::make($request->password)
            ]);
        }
        return redirect()->back()->with('success', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emailActive = auth()->user()->email;
        if($emailActive == 'admin@admin.com'){
            User::where('id', $id)->delete();
            return redirect()->back()->with('success', 'User archived!');
        }
        else if($emailActive == 'admin@admin.com'){
            return redirect()->back()->with('failed', 'You do not have the authority to access this feature!');
        }
    }

    public function kill($id)
    {
        $emailActive = auth()->user()->email;
        if($emailActive == 'admin@admin.com'){
            User::onlyTrashed()->where('id', $id)->forceDelete();
            return redirect()->back()->with('success', 'User deleted!');
        }
        else if($emailActive == 'admin@admin.com'){
            return redirect()->back()->with('failed', 'You do not have the authority to access this feature!');
        }
    }

    public function restore($id)
    {
        $emailActive = auth()->user()->email;
        if($emailActive == 'admin@admin.com'){
            User::onlyTrashed()->where('id', $id)->restore();
            return redirect()->back()->with('success', 'User restored!');
        }
        else if($emailActive == 'admin@admin.com'){
            return redirect()->back()->with('failed', 'You do not have the authority to access this feature!');
        }
    }
}
