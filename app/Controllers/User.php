<?php namespace App\Controllers;

use CodeIgniter\Controller;

class user extends Controller {
    public function User() {
        echo view('user');
    }
}