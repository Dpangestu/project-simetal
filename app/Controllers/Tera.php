<?php

namespace App\Controllers;
use CodeIgniter\View\View;

class Tera extends BaseController
{
    public function index()
    {
        $data['title'] = 'Tera';
        return view('pages/tera-ulang/index', $data);
    }
    
    public function create()
    {
        $data['title'] = 'Tambah Tera';
        return view('pages/tera-ulang/add-tera', $data);
    }
}

