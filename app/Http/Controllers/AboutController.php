<?php

namespace App\Http\Controllers;
//use App\Models\Category;
use App\Models\About;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('layouts.about');
    }


}
