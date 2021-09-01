<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table    = 'tbkriteria';
    protected $primaryKey = 'id_kriteria';
    protected $returnType = 'array';
    protected $allowedFields = ['id_kriteria', 'kriteria'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}