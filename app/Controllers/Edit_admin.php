<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FieldModel;

class Edit_admin extends Controller
{
    public function edit_admin($F_ID = null)
    {
        $FieldModel = new FieldModel();
        $data['field'] = $FieldModel->where('F_ID',$F_ID)->first();
        echo view('edit_admin',$data);
    }
}
