<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\FieldModel;
use App\Models\TypeModel;


class index_admin extends Controller{   
     public function Index_admin(){
        helper(['form']);
        $FieldModel = new FieldModel();
        $data['field'] = $FieldModel->join('type','field.type = type.T_id')->join('promotion','field.Promotion = promotion.p_id' )->orderBy('F_ID', 'Asc')->findAll();
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
        $TypeModel = new TypeModel();
        $data['field'] = $FieldModel->join('type','field.type = type.T_id')->join('Promotion','field.promotion = Promotion.p_id')->where('F_ID',$F_ID)->first();
        $data['type'] = $TypeModel->orderBy('T_id', 'Asc')->findAll();
        echo view('edit_admin',$data);
    }
    public function update()
    {
        $session = session();
        $model = new FieldModel();
        $F_ID = $this->request->getVar('F_ID');
        $file = $this->request->getFile('f_image');
        if($_FILES['f_image']['name'] !=""){
        $f_image = $file->getRandomName();
        $file->move('../public/adminimage_stadium', $f_image);
        }else{
            $f_image = $this->request->getVar('old_image');
        }
      
        $data = [
            'Name' => $this->request->getVar('Name'),
            'Type' => $this->request->getVar('Type'),
            'person' => $this->request->getVar('person'),
            'Price' => $this->request->getVar('Price'),
            'p_name' => $this->request->getVar('Promotion'),
            'f_image' => $f_image,
        ];
        $session->setFlashdata('swel_title', 'แก้ไขข้อมูลสำเร็จ');
        // $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
        $session->setFlashdata('swel_icon', 'success');
        $session->setFlashdata('swel_button', 'ตกลง');
        $model->update($F_ID, $data);

        return redirect()->to('/index_admin');
    
    }
    
    public function delete($F_ID = null) {
        $session = session();
        $FieldModel = new FieldModel();
        $data['group_project'] = $FieldModel->where('F_ID', $F_ID)->delete($F_ID);
        $session->setFlashdata('swel_title', 'ลบข้อมูลสำเร็จ');
        // $session->setFlashdata('swel_text', 'โปรดเข้าสู่ระบบก่อนทำรายการ');
        $session->setFlashdata('swel_icon', 'success');
        $session->setFlashdata('swel_button', 'ตกลง');
        return $this->response->redirect(site_url('/index_admin'));
    }
}
