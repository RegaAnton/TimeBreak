<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Jumbotron;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $jumbotron = Jumbotron::all();
        $cities = City::all();

        return view('index', compact('jumbotron', 'cities'));
    }
}
