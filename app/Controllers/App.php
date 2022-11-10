<?php

namespace App\Controllers;

class App extends BaseController
{
    public function index()
    {
        return view('layouts/app');
    }
    public function about()
    {
        echo 'ini halaman about';
    }
}

