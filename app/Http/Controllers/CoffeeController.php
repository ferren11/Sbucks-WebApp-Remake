<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function index() {
        $coffees = Coffee::latest()->get();

        return view('coffees', compact('coffees'));
    }
}

