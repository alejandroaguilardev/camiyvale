<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use App\Models\Information;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $informations = Controller::data();
        $services = Service::all();
        $categories = Category::all();
        return view('contact.index', compact('informations', 'services', 'categories'));
    }

    public function Store(Request $request)
    {
        $informations = Controller::data();
        $services = Service::all();
        $categories = Category::all();

        $request->validate([
            'nombre'=>'required|min:4',
            'telefono'=>'required|min:6',
            'asunto'=>'required|min:4',
            'correo'=>'required|email',
            'mensaje'=>'required',
        ]);

        $informations = Controller::data();
        $services = Service::all();
        $categories = Category::all();


        $mail = new ContactMailable($request->all());
        $email = Information::where('label','email')->first();
        Mail::to($email->description)->send($mail);
        return redirect()->route('contact.index')->with('alert','El Mensaje Fue Enviado');
    }
}
