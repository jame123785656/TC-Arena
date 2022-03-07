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
    public function edit_admin($F_ID = null)
    {
        $FieldModel = new FieldModel();
        $data['field'] = $FieldModel->where('F_ID',$F_ID)->first();
        echo view('edit_admin',$data);
    }
    public function update()
    {
        $model = new FieldModel();
        $F_ID = $this->request->getVar('F_ID');
        $file = $this->request->getFile('f_image');
        $f_image = $file->getRandomName();
        $file->move('../public/adminimage_stadium', $f_image);
        $data = [
            'Name' => $this->request->getVar('Name'),
            'Type' => $this->request->getVar('Type'),
            'person' => $this->request->getVar('person'),
            'Price' => $this->request->getVar('Price'),
            'Promotion' => $this->request->getVar('Promotion'),
            'f_image' => $f_image,
        ];
        $model->update($F_ID, $data);

        return redirect()->to('/index_admin');
    }
    
    public function delete($F_ID = null) {
        $FieldModel = new FieldModel();
        $data['group_project'] = $FieldModel->where('F_ID', $F_ID)->delete($F_ID);
        return $this->response->redirect(site_url('/index_admin'));
    }
}
