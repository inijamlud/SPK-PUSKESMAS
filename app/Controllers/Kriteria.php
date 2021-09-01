<?php

namespace App\Controllers;

use \App\Models\KriteriaModel;
use \App\Models\C1Model;
use \App\Models\C2Model;
use \App\Models\C3Model;
use \App\Models\C4Model;

class Kriteria extends BaseController
{
    public function index()
    {
        $MKrit = new KriteriaModel();
        $data['krit'] = $MKrit->findAll();
        $data['jml_krit'] = $MKrit->countAll();

        $MC1 = new C1Model();
        $data['c1'] = $MC1->findAll();
        $data['jml_c1'] = $MC1->countAll();

        $MC2 = new C2Model();
        $data['c2'] = $MC2->findAll();
        $data['jml_c2'] = $MC2->countAll();

        $MC3 = new C3Model();
        $data['c3'] = $MC3->findAll();
        $data['jml_c3'] = $MC3->countAll();

        $MC4 = new C4Model();
        $data['c4'] = $MC4->findAll();
        $data['jml_c4'] = $MC4->countAll();
        return view('kriteria/index', $data);
    }

    public function tambah()
    {
        return view('kriteria/puskes_tambah');
    }

    public function simpan()
    {
        $MKrit = new KriteriaModel();
        $MKrit->insert([
            'kriteria' => $this->request->getVar('kriteria')
        ]);

        return redirect()->to('index');
    }

    public function editc1($id)
    {
        session();
        $a = new C1Model();
        $b = $a->find($id);
        $data['c1'][] = $b;
        return view('kriteria/c1_edit', $data);
    }

    public function proses_editc1($id)
    {
        $a = new C1Model();
        $a->update($id, [
            'pilihan_c1' => $this->request->getVar('plhc1'),
            'bobot_c1' => $this->request->getVar('bc1')
        ]);
        return redirect()->to('../Kriteria');
    }



    public function editc2($id)
    {
        session();
        $a = new C2Model();
        $b = $a->find($id);
        $data['c2'][] = $b;
        return view('kriteria/c2_edit', $data);
    }

    public function proses_editc2($id)
    {
        $a = new C2Model();
        $a->update($id, [
            'pilihan_c2' => $this->request->getVar('plhc2'),
            'bobot_c2' => $this->request->getVar('bc2')
        ]);
        return redirect()->to('../Kriteria');
    }



    public function editc3($id)
    {
        session();
        $a = new C3Model();
        $b = $a->find($id);
        $data['c3'][] = $b;
        return view('kriteria/c3_edit', $data);
    }

    public function proses_editc3($id)
    {
        $a = new C3Model();
        $a->update($id, [
            'pilihan_c3' => $this->request->getVar('plhc3'),
            'bobot_c3' => $this->request->getVar('bc3')
        ]);
        return redirect()->to('../Kriteria');
    }



    public function editc4($id)
    {
        session();
        $a = new C4Model();
        $b = $a->find($id);
        $data['c4'][] = $b;
        return view('kriteria/c4_edit', $data);
    }

    public function proses_editc4($id)
    {
        $a = new C4Model();
        $a->update($id, [
            'pilihan_c4' => $this->request->getVar('plhc4'),
            'bobot_c4' => $this->request->getVar('bc4')
        ]);
        return redirect()->to('../Kriteria');
    }

}
