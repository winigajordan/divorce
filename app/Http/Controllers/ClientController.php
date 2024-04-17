<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    

    public function index()
    {
        return view('client.home');
    }

    public function amiable()
    {
        return view('client.amiable');
    }

    public function devis()
    {
        return view('client.devis');
    }

    public function contentieux()
    {
        return view('client.contentieux');
    }

    public function faute() {
        return view('client.faute');
    }


}
