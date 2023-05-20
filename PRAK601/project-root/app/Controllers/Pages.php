<?php

namespace App\Controllers;
use \App\Models\MahasiswaModel;


class Pages extends BaseController
{
    public function index()
    {
        $mahasiswa = new MahasiswaModel();
        $data = [
            'title' => 'Home',
            "nama" => $mahasiswa->getNama(),
            "nim" => $mahasiswa->getNim()
        ];

        return view('pages/home', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil',
        ];

        return view('pages/profil', $data);
    }
}