<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class index extends Controller
{
    public function index()
    {
        echo view('index');
    }
}
