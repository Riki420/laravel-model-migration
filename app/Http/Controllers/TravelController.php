<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TravelModel;

class TravelController extends Controller
{
    public function index(){
        return view('home');
    }
}
