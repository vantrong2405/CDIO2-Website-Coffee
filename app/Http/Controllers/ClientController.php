<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function pageAbout()
    {
        return view('pageClient.about');
    }
    public function pageContacts()
    {
        return view('pageClient.contacts');
    }
    public function pageHistory()
    {
        return view('pageClient.history');
    }
    public function pageLogin()
    {
        return view('pageClient.Login');
    }
    public function pageMenu()
    {
        return view('pageClient.menu-coffee');
    }
    public function pageReservation()
    {
        return view('pageClient.reservation');
    }
    public function pageServices()
    {
        return view('pageClient.services');
    }
}
