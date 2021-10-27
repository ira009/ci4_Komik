<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home | Komikku'
        ];
        
        echo view('pages/home', $data);
        
    }

    public function about()
    {
        $data = [
            'tittle' => 'About me | Komikku'
        ];
        
        echo view('pages/about', $data);
        
    }

    public function contact()
    {
        $data = [
            'tittle' => 'Contact Us | Komikku',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. Raya Kintamani',
                    'kota' => 'Bangli'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Jl. Raya Bangli',
                    'kota' => 'Bangli'
                ]
            ]
        ];
        
        echo view('pages/about', $data);
        
    }


}
