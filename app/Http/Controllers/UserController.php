<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::role('user')->get();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('mahasiswa.mahasiswa', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'npm' => ['required', 'string', 'max:255', 'unique:' . User::class],
        ]);

        User::create([
            'name' => $request->name,
            'npm' => $request->npm,
            'email' => $request->email,
            'phone' => $request->phone,
        ])->assignRole('user');
        toast('user created successfully', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {


        $users = User::where('id', $id)->first();
        $users->delete();
        // $user->delete();
        toast('user deleted successfully', 'success');
        return back()->with('message', 'User Deleted');
    }
}
