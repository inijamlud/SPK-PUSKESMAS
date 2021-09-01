<?php

namespace App\Models;

use CodeIgniter\Model;

class C3Model extends Model
{
    protected $table    = 'c3';
    protected $primaryKey = 'id_c3';
    protected $returnType = 'array';
    protected $allowedFields = ['id_c3', 'pilihan_c3','bobot_c3'];
    protected $useTimestamps = true;
    protected $updatedField  = 'updated_at';

}