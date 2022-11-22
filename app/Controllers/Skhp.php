<?php

namespace App\Controllers;

class Skhp extends BaseController
{
    public function index()
    {
        if (in_groups('admin')) {
            echo view('pages/skhp/index');
        } else {
            echo "404";
        }
    }
    public function create(){
        return view('pages/spt/add-spt');
    }
}

