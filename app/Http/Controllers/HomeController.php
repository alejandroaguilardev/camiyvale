<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Service;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $informations = Controller::data();
        $services = Service::all();
        $categories = Category::all();
        return view('home.index', compact('informations', 'services', 'categories'));
;   }
}
