<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UhistoryModel;

class Userhistory extends Controller
{
    public function userhistory()
    {
        // include helper form
        helper(['form']);
        $UhistoryModel = new UhistoryModel();
        $data['user_history'] = $UhistoryModel->orderBy('H_ID', 'ASC')->findAll();
        echo view('userhistory', $data);
    }
}