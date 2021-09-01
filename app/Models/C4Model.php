<?php

namespace App\Models;

use CodeIgniter\Model;

class C4Model extends Model
{
    protected $table    = 'c4';
    protected $primaryKey = 'id_c4';
    protected $returnType = 'array';
    protected $allowedFields = ['id_c4', 'pilihan_c4','bobot_c4'];
    protected $useTimestamps = true;
    protected $updatedField  = 'updated_at';

}