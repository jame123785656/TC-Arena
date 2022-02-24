<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Pay extends Controller {
    public function pay() {
        // include helper form
        helper(['form']);
        $data = [];
        echo view('pay', $data);
    }
}