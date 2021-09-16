<?php
namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        echo view('components/header');
        echo view('components/sidebar');
        echo view('components/topbar');
        echo view('admin/index');
        echo view('components/footer');
    }
}
