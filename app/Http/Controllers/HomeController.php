<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $name = auth()->user()->name;
        return inertia('Home',compact('name'));
    }

    public function about()
    {
        return Inertia::render('About');
    }
}
