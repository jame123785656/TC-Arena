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
            $img = $this->request->getFile('file');
            $img->move(WRITEPATH . '../public/adminimage_stadium');
        $data = [
            'Name' => $this->request->getVar('Name'),
            'Type' => $this->request->getVar('Type'),
            'person' => $this->request->getVar('person'),
            'Price' => $this->request->getVar('Price'),
            'Promotion' => $this->request->getVar('Promotion'),
            'f_image' => $img->getName()
        ];
        $model->insert($data);
        return redirect()->to('/index_admin');
    }
}
