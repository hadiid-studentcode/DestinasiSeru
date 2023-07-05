<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $username = auth()->user()->username;
        $picture = auth()->user()->picture;

        // get blog data
        $result = new Blogs();
        $data = $result->getData();



        return view('admin.blog')
            ->with('blogs', $data)

            ->with('username', $username)

            ->with('picture', $picture);
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

        $id = Auth::user()->id;


        $image = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('image')->getClientOriginalName());


        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'author' => $id
        ];


        $result = new Blogs();
        $result->saveData($data);

        // simpan foto
        $request->file('image')->move(public_path('Assets/img/content'), $image);

        return redirect('/blog');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //    hapus blog
        $result = new Blogs();
        $result->deleteData($id);

        return redirect('/blog');
    }
}
