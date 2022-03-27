<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Userhistory extends Controller
{
    public function userhistory()
    {
        // include helper form
        helper(['form']);
        echo view('userhistory');
    }
}