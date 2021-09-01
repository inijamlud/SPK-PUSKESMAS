<?php

namespace App\Models;

use CodeIgniter\Model;

class PusModel extends Model
{
    protected $table    = 'tbpuskesmas';
    protected $primaryKey = 'id_puskesmas';
    protected $returnType = 'array';
    protected $allowedFields = ['id_puskesmas', 'nama_puskesmas','alamat'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}