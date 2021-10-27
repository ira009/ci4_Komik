<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {

    $komik = $this->komikModel->findAll();
        
        $data =[
            'tittle' => 'Daftar Komik',
            'komik' => $this->komikModel->getKomik()
        ];

        //$komikModel = new \App\Models\KomikModel();
    
        return view('komik/index', $data);


        
    }
    public function detail($slug)
        {
            $data = [
                'tittle' => 'Detail Komik',
                'komik' => $this->komikModel->getKomik($slug)
            ];

            //jika komik tidak ada di tabel
            if(empty($data['komik'])) {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik' . $slug . 'tidak ditemukan');
            }
            return view('komik/detail', $data);
        }

        public function create()
        {
           // session();
            $data = [
                'tittle' => 'Form Tambah Data Komik',
                'validation' => \Config\Services::validation()
            ];

            return view('komik/create', $data);
        }


        public function save()
        {
            if(!$this->validate([
                'judul'=> [
                    'rules' => 'required|is_unique[komik.judul]',
                    'errors' => [
                        'required' => '{field} komik harus diisi.',
                        'is_unique' =>'{field} komik sudah terdaftar'
                    ]
                    ],
                'penulis' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} komik harus diisi.',
                    ]
                    ],
                'penerbit' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} komik harus diisi.',
                    ]
                    ],
                'sampul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} komik harus diisi.',
                    ]
                ]
            ])){
                $validation = \Config\Services::validation();
                return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
            }




            $slug = url_title($this->request->getVar('judul'), '-', true);
            $this->komikModel->save([
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'penulis' => $this->request->getVar('penulis'),
                'penulis' => $this->request->getVar('penerbit'),
                'penulis' => $this->request->getVar('sampul')
            ]);

            session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

            return redirect()->to('/komik');
            //dd($this->request->getVar());
        }
}