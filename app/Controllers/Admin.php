<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Dashboard',
            'subjudul' => '',
            'menu' => 'Dashboard',
            'submenu' => '',
            'page' => 'dashboard_coba',
        ];
        return view('admin/dashboard', $data);
    }
}
