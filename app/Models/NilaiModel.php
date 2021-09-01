<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
    protected $table    = 'tbnilai';
    protected $primaryKey = 'id_nilai';
    protected $returnType = 'array';
    protected $allowedFields = ['id_nilai', 'id_pus', 'C1', 'C2', 'C3', 'C4'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function showAll()
    {
        return $this->db->table('tbnilai')
            ->join('C1', 'C1.id_c1 =  tbnilai.C1')
            ->join('C2', 'C2.id_c2 =  tbnilai.C2')
            ->join('C3', 'C3.id_c3 =  tbnilai.C3')
            ->join('C4', 'C4.id_c4 =  tbnilai.C4')
            ->join('tbpuskesmas', 'tbpuskesmas.id_puskesmas = tbnilai.id_pus')
            ->get()->getResultArray();
    }

    public function sumNorm()
    {
        return $this->db->table('tbnilai')
            ->select('sum(c1.bobot_c1) as sumc1, sum(c2.bobot_c2) as sumc2, sum(c3.bobot_c3) as sumc3, sum(c4.bobot_c4) as sumc4, ')
            ->join('C1', 'C1.id_c1 =  tbnilai.C1')
            ->join('C2', 'C2.id_c2 =  tbnilai.C2')
            ->join('C3', 'C3.id_c3 =  tbnilai.C3')
            ->join('C4', 'C4.id_c4 =  tbnilai.C4')
            ->get()->getResultArray();
        // select sum(c1.bobot_c1) from `tbnilai`, c1 where tbnilai.C1 = c1.id_c1;
    }
}
