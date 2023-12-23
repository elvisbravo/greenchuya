<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('web/index');
    }

    public function about() {
        return view('web/about');
    }

    public function services() {
        return view('web/services');
    }

    public function contacto() {
        return view('web/contact');
    }
}
