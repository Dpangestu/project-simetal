<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo 'landing page';
    }
    public function login()
    {
        return view('auth/login');
    }
    public function registration()
    {
        return view('auth/register');
    }
}

