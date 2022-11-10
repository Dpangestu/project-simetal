<?php

namespace App\Controllers;

class sekdis extends BaseController
{
    public function index()
    {
        return view('layouts/sekdis');
    }
    public function about()
    {
        echo 'ini halaman about';
    }
}

