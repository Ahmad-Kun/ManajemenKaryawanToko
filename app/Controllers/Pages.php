<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use App\Models\ProfilModel;

class Pages extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function halaman_sesi(){
        $session = \Config\Services::session();
    }
    public function welcome_message(){
        $profilModel = new ProfilModel();
        $profilPerusahaan = $profilModel->findAll();

        $data = [
            'tittle' => 'Profil Perusahaan',
            'profilperusahaan' => $profilPerusahaan
        ];
        return view('dashboard', $data);
    }
}
