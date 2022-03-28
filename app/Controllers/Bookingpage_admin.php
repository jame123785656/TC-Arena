<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FieldModel;

class Bookingpage_admin extends Controller {
    public function bookingpage_admin() {
        // include helper form
        helper(['form']);
        $FieldModel = new FieldModel();
        $data['field'] = $FieldModel->orderBy('F_ID', 'ASC')->findAll();
        echo view('bookingpage_admin', $data);
    }
}