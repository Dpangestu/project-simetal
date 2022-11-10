<?php

namespace App\Controllers;

class penera extends BaseController
{
    public function index()
    {
        return view('layouts/penera');
    }
    public function about()
    {
        echo 'ini halaman about';
    }
}

