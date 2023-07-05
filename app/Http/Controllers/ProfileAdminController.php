<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // data username
        $id = auth()->user()->id;
        $username = auth()->user()->username;
        $email = auth()->user()->email;
        $first_name = auth()->user()->first_name;
        $last_name = auth()->user()->last_name;
        $picture = auth()->user()->picture;

        return view('admin.profile')
            ->with('id', $id)
            ->with('username', $username)
            ->with('email', $email)
            ->with('first_name', $first_name)
            ->with('last_name', $last_name)
            ->with('picture', $picture)
            ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $image = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('image')->getClientOriginalName());

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'picture' => $image
        ];

        // update user
        $result = new User();
        $result->updateData($data, $id);

        // simpan foto
        $request->file('image')->move(public_path('admin/assets/img/avatars'), $image);

        return redirect('/profile');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
