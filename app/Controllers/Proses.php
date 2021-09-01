<?php

namespace App\Controllers;

use \App\Models\PusModel;
use \App\Models\KriteriaModel;
use \App\Models\NilaiModel;
use App\Models\C1Model;
use App\Models\C2Model;
use App\Models\C3Model;
use App\Models\C4Model;

class Proses extends BaseController
{
    public function index()
    {
        $MKri = new KriteriaModel();
        $MNilai = new NilaiModel();

        $data = [
            'kri' => $MKri->findAll(),
            'pus' => $MNilai->showAll(),
            'show' => $MNilai->showAll(),
            'sumNo' => $MNilai->sumNorm(),

        ];
        return view('proses/index', $data);
    }

    public function tambah()
    {
        $MPus = new PusModel();
        $MKri = new KriteriaModel();
        $C1 = new C1Model();
        $C2 = new C2Model();
        $C3 = new C3Model();
        $C4 = new C4Model();

        $data = [
            'pus' => $MPus->findAll(),
            'kri' => $MKri->findAll(),
            'k1' => $C1->findAll(),
            'k2' => $C2->findAll(),
            'k3' => $C3->findAll(),
            'k4' => $C4->findAll(),
        ];
        return view('proses/tambah', $data);
    }

    public function simpan()
    {

        $MNilai = new NilaiModel();

        $MNilai->insert([
            'id_pus' => $this->request->getVar('id_pus'),
            'C1' => $this->request->getVar('k1'),
            'C2' => $this->request->getVar('k2'),
            'C3' => $this->request->getVar('k3'),
            'C4' => $this->request->getVar('k4'),
        ]);

        return redirect()->to('index');
    }

    public function hapus($id)
    {
        $a = new NilaiModel();
        $a->delete($id);
        return redirect()->to('../Proses');
    }
}
