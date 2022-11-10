<?php

namespace App\Controllers;

class kabid extends BaseController
{
    public function index()
    {
        return view('layouts/kabid');
    }
    public function about()
    {
        echo 'ini halaman about';
    }
}

