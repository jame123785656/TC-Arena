<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BookingModel;
use App\Models\DetailModel;

class Userhistory extends Controller
{
    public function userhistory($ID = null)
    {
        $db      = \Config\Database::connect();
        $session = session();
        $builder = $db->table('booking');
        $builder->where('B_idUser', $session->get('ID'));
        $builder->selectMax('B_id');
        $test = $builder->get();
        $num = $test->getResult(); 
        // print_r($query[0]);
        $query = $num[0]->B_id;
        $b_id = $query;
        helper(['form']);
        $BookingModel = new BookingModel();
        $DetailModel = new DetailModel();
        $data['booking'] = $BookingModel->join('field','booking.B_idFeld = field.F_ID')->join('statuss','booking.B_status = statuss.S_id')->where('B_idUser',$ID)->orderBy('B_id', 'Asc')->findAll();
        $data['detail'] = $DetailModel->join('Time','detail.t_id = time.T_id')->where('d_id',$b_id)->orderBy('d_id', 'Asc')->findAll();
        echo view('userhistory',$data);
    }
}