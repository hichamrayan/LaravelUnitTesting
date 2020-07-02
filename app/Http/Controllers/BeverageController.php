<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeverageController extends Controller
{
    public function index()
    {
        return view('beverage.index');
    }
}
