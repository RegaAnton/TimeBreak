<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Event;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('dashboard.event.dashboard_event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        return view('dashboard.event.create_event', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'city_id' => 'required|exists:cities,id',
            'location' => 'required|string|max:255',
            'gmaps_link' => 'required|url',
            'registration_link' => 'nullable|url',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'replay' => 'nullable|url',
            'photo' => 'nullable|url',
        ]);

        $slug = Str::slug($request->event_name);

        $image = $request->image;
        $imageName = $image->hashName();
        $path = 'images/event/';

        $image->move($path, $imageName);

        $data = new Event();
        $data->event_name = $request->event_name;
        $data->slug = $slug;
        $data->description = $request->description;
        $data->event_date = $request->event_date;
        $data->event_time = $request->event_time;
        $data->city_id = $request->city_id;
        $data->location = $request->location;
        $data->gmaps_link = $request->gmaps_link;
        $data->registration_link = $request->registration_link;
        $data->image = $path . $imageName;
        $data->replay = $request->replay;
        $data->photo = $request->photo;

        $data->save();

        return redirect()->route('index.event');
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
    public function edit(string $slug)
    {
        $event = Event::with('city')->where('slug', $slug)->firstOrFail();
        $cities = City::all();

        return view('dashboard.event.edit_event', compact('event', 'cities'));
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
    public function destroy(string $slug)
    {
        $event = Event::where('slug', $slug)->get();
        dd($event);
    }
}