<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get destinasi
        $result = new Blogs();
        $data = $result->getData();



        return view('blog.destinasi')
        ->with('destinasi', $data)
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

        // blog first
        $result = new Blogs();
        $data = $result->getDataFirst($id);


        // Mendapatkan waktu saat ini
        $currentDateTime = Carbon::now();
        // Mengubah format waktu pada kolom "created_at" menjadi objek Carbon
        $createdAt = Carbon::parse($data->created_at);
        // Menghitung selisih waktu antara waktu saat ini dengan waktu "created_at"
        $diffInMinutes = $createdAt->diffInMinutes($currentDateTime);
        // Membuat teks "Last updated x mins ago"
        $lastUpdatedText = 'Last updated ' . $diffInMinutes . ' mins ago';






       return view('blog.detail')
       ->with('destinasi', $data)
       ->with('lastUpdatedText', $lastUpdatedText)
       ;
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
        //
    }
}
