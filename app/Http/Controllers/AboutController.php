<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Category;
use App\Models\Service;

class AboutController extends Controller
{
    public function index()
    {
        $informations = Controller::data();
        $services = Service::all();
        $categories = Category::all();
        return view('about.index', compact('informations', 'services', 'categories'));
    }
}
