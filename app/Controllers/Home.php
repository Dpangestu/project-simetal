<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('auth/login');
    }
    public function registration()
    {
        return view('auth/register');
    }

    public function loginUser()
    {
        return view('auth/login_user');
    }
    public function FormLoginUser()
    {
        return view('Admin/dashboard_user');
    }
}
