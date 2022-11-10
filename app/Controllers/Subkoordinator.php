<?php

namespace App\Controllers;

class subkoordinator extends BaseController
{
    public function index()
    {
        return view('layouts/subkoordinator');
    }
    public function about()
    {
        echo 'ini halaman about';
    }
}

