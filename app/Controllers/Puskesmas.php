<?php

namespace App\Controllers;

use \App\Models\PusModel;

class Puskesmas extends BaseController
{

    public function index()
    {
        $MPus = new PusModel();
        $data['puskes'] = $MPus->findAll();
        $data['jml_puskes'] = $MPus->countAll();
        return view('puskesmas/index', $data);
    }

    public function tambah()
    {
        return view('puskesmas/puskes_tambah');
    }

    public function simpan()
    {
        $MPus = new PusModel();
        $MPus->insert([
            'nama_puskesmas' => $this->request->getVar('nama_pus'),
            'alamat' => $this->request->getVar('alamat')
        ]);

        return redirect()->to('index');
    }

    public function edit($id)
    {
        session();
        $a = new PusModel();
        $b = $a->find($id);
        $data['puskes'][] = $b;
        return view('puskesmas/puskes_edit', $data);
    }

    public function proses_edit($id)
    {
        $a = new PusModel();
        $a->update($id, [
            'nama_puskesmas' => $this->request->getVar('nama_pus'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        return redirect()->to('../Puskesmas');
    }

    public function hapus($id)
    {
        $a = new PusModel();
        $a->delete($id);
        return redirect()->to('../Puskesmas');
    }
    //--------------------------------------------------------------------

}
