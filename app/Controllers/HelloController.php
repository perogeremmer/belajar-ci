<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HelloController extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Coba Aja",
            "name" => "Hudya Kece"
        ];

        echo view('index', $data);
    }

    public function showAll()
    {
        $data = [
            "title" => "Coba Aja",
            "name" => "Tampilkan Seluruh Data"
        ];

        echo view('index', $data);
    }
}
