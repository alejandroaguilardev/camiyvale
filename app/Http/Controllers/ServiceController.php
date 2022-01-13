<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Service;
use App\Models\Category;

class ServiceController extends Controller
{
    public function index()
    {
        $informations = Controller::data();
        $services = Service::all();
        $categories = Category::all();
        return view('service.index', compact('informations', 'services', 'categories'));
    } 

    public function show(Service $service)
    {
        $informations = Controller::data();
        $services = Service::all();
        $services_related = Service::where('id','<>',$service->id)->get();
        $categories = Category::all();
        return view('service.show', compact('informations', 'services', 'categories', 'service', 'services_related'));
    } 
}
