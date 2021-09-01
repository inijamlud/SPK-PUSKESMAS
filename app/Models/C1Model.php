<?php

namespace App\Models;

use CodeIgniter\Model;

class C1Model extends Model
{
    protected $table    = 'c1';
    protected $primaryKey = 'id_c1';
    protected $returnType = 'array';
    protected $allowedFields = ['id_c1', 'pilihan_c1','bobot_c1'];
    protected $useTimestamps = true;
    protected $updatedField  = 'updated_at';

}