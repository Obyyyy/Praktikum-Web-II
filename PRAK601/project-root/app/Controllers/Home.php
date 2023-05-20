<?php

namespace App\Controllers;
use \App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index()
    {
        $mahasiswa = new MahasiswaModel();
        
        return view('index', [
            "data" => $mahasiswa->getNama()
        ]);

        echo '<h1>Haloo</h1>';
    }

    public function coba()
    {
        echo 'balasda';
    }
}