<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;


class Update extends Controller
{
    public function index($ID = null)
    {
        $UserModel = new UserModel;
        $session = session();
        $data['user'] = $UserModel->where('ID',$ID)->first();
        echo view('update', $data);
    }

    
    public function update()
    {
        $model = new UserModel();
        $session = session();
        $ID = $this->request->getVar('id');
        $file = $this->request->getFile('image');
        if($_FILES['image']['name'] !=""){
        $image = $file->getRandomName();
        $file->move('../public/img', $image);
        }else{
            $image = $this->request->getVar('old_image');;
        }
        $data = [
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'phone' => $this->request->getVar('phone'),
            'Email' => $this->request->getVar('Email'),
            'image' => $image,
        ];
        $model->update($ID, $data);
        $session->set($data);

        return redirect()->to('/profile');
    }
  
}


