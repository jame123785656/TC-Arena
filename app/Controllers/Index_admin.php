<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\FieldModel;

class index_admin extends Controller{   
     public function Index_admin(){
        helper(['form']);
        $FieldModel = new FieldModel();
        $data['field'] = $FieldModel->orderBy('F_ID', 'ASC')->findAll();
        echo view('index_admin',$data);
    }
    public function insert(){
        $model = new FieldModel();
        $file = $this->request->getFile('f_image');
        $f_image = $file->getRandomName();
        $file->move('../public/img', $f_image);
        $data = [
            'Name' => $this->request->getVar('Name'),
            'Type' => $this->request->getVar('Type'),
            'person' => $this->request->getVar('person'),
            'Price' => $this->request->getVar('Price'),
            'Promotion' => $this->request->getVar('Promotion'),
            'f_image' => $f_image,
        ];
        $model->insert($data);
        return redirect()->to('/index_admin');
    }
}
