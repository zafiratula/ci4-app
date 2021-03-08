<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use CodeIgniter\HTTP\Exceptions\HTTPException;



class biodata extends BaseController
{
    protected $biodataModel;

    public function __construct()
    {
        $this->biodataModel = new BiodataModel();
    }

    public function index()
    {
        //$biodata = $this->biodataModel->findAll();
        $data = ([
            'biodata' => $this->biodataModel->getBiodata()
        ]);
        // var_dump($data);
        //$biodataModel = new \App\Models\BiodataModel();



        return view('biodata/index', $data);
    }

    public function detail($slug)
    {
        //echo $slug;
        $data = [
            'biodata' =>  $this->biodataModel->getBiodata($slug)
        ];

        if (empty($data['biodata'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('nama' . $slug . 'tidak ditemukan.');
        }

        return view('biodata/detail', $data);
    }

    public function create()
    {
        // $data = ([
        //'title' => 'Form Tambah Data Diri'

        // ]);

        return view('biodata/create');
    }


    public function save()
    {
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->biodataModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'TTL' => $this->request->getVar('TTL'),
            'alamat' => $this->request->getVar('alamat'),
            'foto' => $this->request->getVar('foto')
        ]);

        return redirect()->to('/biodata');
    }

    public function delete($id)
    {
        $this->biodataModel->delete($id);
        return redirect()->to('/biodata');
    }

    public function edit($slug)
    {
        $data = [
            'biodata' => $this->biodataModel->getBiodata($slug)
        ];
        return view('biodata/edit', $data);
    }

    public function update($id)
    {
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->biodataModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'TTL' => $this->request->getVar('TTL'),
            'alamat' => $this->request->getVar('alamat'),
            'foto' => $this->request->getVar('foto')
        ]);

        return redirect()->to('/biodata');
    }
}
