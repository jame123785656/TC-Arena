<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BookingModel;
use App\Models\DetailModel;


class pay_admin extends Controller {
    
    public function Pay_admin() {
   
        helper(['form']);
        $BookingModel = new BookingModel();
        $DetailModel = new DetailModel();
        $data['booking'] = $BookingModel->join('field','booking.B_idFeld = field.F_ID')->
        join('user','booking.B_idUser = user.ID')->where('B_status',2)->orderBy('B_id', 'Asc')->findAll();
        
        $data['detail'] = $DetailModel->join('Time','detail.t_id = time.T_id')->orderBy('d_id', 'Asc')->findAll();
        echo view('pay_admin',$data);
    }
    public function update_pay() {
        $model = new BookingModel();
        $B_id = $this->request->getVar('B_id');
        $data = [
            'B_status' => "3"
        ];
        $model->update($B_id, $data);
        return redirect()->to('/pay_admin');
    }
}