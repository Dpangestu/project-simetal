<?php

namespace App\Controllers;

class Spt extends BaseController
{
    public function index()
    {
        return view('layouts/spt');
    }
    public function about()
    {
        echo 'ini halaman about';
    }
}

