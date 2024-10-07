<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Event;
use App\Models\Jumbotron;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $jumbotron = Jumbotron::all();
        $events = Event::latest()->take(4)->get();
        $cities = City::latest()->take(4)->get();

        return view('index', compact('jumbotron', 'cities', 'events'));
    }
}
