<?php

namespace App\Controllers;

class Penerbitan_spt extends BaseController
{
    public function index()
    {
        return view('layouts/penerbitan_spt');
    }
    public function about()
    {
        echo 'ini halaman about';
    }
}

