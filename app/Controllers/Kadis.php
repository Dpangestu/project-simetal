<?php

namespace App\Controllers;

class kadis extends BaseController
{
    public function index()
    {
        return view('layouts/kadis');
    }
    public function about()
    {
        echo 'ini halaman about';
    }
}

