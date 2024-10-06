<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class JumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumbotron = Jumbotron::all();
        return view('dashboard.jumbotron.dashboard_jumbotron', compact('jumbotron'));
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
        $request->validate([
            'title' => 'required|string|max:255',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $image = $request->file('image_url');
        $imageName = 'image_' . time() . '.' . $image->getClientOriginalExtension();
        $path = 'images/jumbotron/';
        $image->move($path, $imageName);

        // Simpan data ke database
        $data = new Jumbotron();
        $data->title = $request->title;
        $data->image_url = $path . $imageName;

        $data->save();

        return redirect()->route('index.jumbotron');
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
        $data = Jumbotron::findOrFail($id);
        return view('dashboard.jumbotron.form_jumbotron', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = Jumbotron::findOrFail($id);

        // Hapus Image di Lokal
        if (file_exists(public_path($data->image_url))) {
            unlink(public_path($data->image_url)); // Hapus file gambar lama
        }

        $image = $request->file('image_url');
        $imageName = 'image_' . time() . '.' . $image->getClientOriginalExtension();
        $path = 'images/jumbotron/';
        $image->move($path, $imageName);

        // Perbarui data ke database
        $data->title = $request->title;
        $data->image_url = $path . $imageName;

        $data->save();

        return redirect()->route('index.jumbotron');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
