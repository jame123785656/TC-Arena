<?php

namespace App\Models;

use CodeIgniter\Model;

class UhistoryModel extends Model
{
    protected $table = 'user_history';
    protected $primaryKey = 'H_id';
    protected $allowedFields = ['H_id', 'H_time','H_Tbook','H_field','H_hour','H_price','H_status'];

}
