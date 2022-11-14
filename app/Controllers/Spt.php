<?php

namespace App\Controllers;

class Spt extends BaseController
{
    public function index()
    {
        if (in_groups('admin')) {
            echo view('pages/spt/admin');
        } else {
            echo "404";
        }
    }
    public function create(){
        return view('pages/spt/add-spt');
    }
}

