<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;


class JumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumbotron = Jumbotron::all();
        return view('dashboard_jumbotron', compact('jumbotron'));
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

        $slug = Str::slug($request->title);

        $image = $request->file('image_url');
        $imageName = 'image_' . time() . '.' . $image->getClientOriginalExtension();
        $path = 'images/jumbotron/';
        $image->move($path, $imageName);

        // Simpan data ke database
        $data = new Jumbotron();
        $data->title = $request->title;
        $data->slug = $slug;
        $data->image_url = $path . $imageName;

        $data->save();

        return redirect()->route('index');
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
    public function update(Request $request, $slug)
    {
        
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        // Mencari Data
        $findData = Jumbotron::where('slug', $slug)->firstOrFail();

        // Hapus Image di Lokal
        if (file_exists(public_path($findData->image_url))) {
            unlink(public_path($findData->image_url)); // Hapus file gambar lama
        }

        // Hapus data di database
        $findData->delete();

        return redirect()->route('index.jumbotron');
    }
}
