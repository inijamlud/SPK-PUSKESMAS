<?php

namespace App\Models;

use CodeIgniter\Model;

class C2Model extends Model
{
    protected $table    = 'c2';
    protected $primaryKey = 'id_c2';
    protected $returnType = 'array';
    protected $allowedFields = ['id_c2', 'pilihan_c2','bobot_c2'];
    protected $useTimestamps = true;
    protected $updatedField  = 'updated_at';

}