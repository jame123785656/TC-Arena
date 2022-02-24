<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Profile extends Controller {
    public function profile() {
        // include helper form
        helper(['form']);
        $data = [];
        echo view('profile', $data);
    }
}