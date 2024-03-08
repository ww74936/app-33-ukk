<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'telpon' => 'required',
            'role' => 'required',
            'email'=> 'required',
            'password' => 'required',
        ]);

        User::create($user);
        return redirect('/user');
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
        $user = User::findorFail($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where("id", $id);
        $dataUser = $user->first();
        
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'telpon' => $request->telpon,
            'role' => $request->role,
        ]);
        return redirect()->to('user')->with('succes', 'Data Berhasil Ditambahkan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $user->delete();
        $user = User::where("id", $id)->first();
        User::where("id", $id)->delete();
        return redirect()->to('/user')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
