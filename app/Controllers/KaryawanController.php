<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KaryawanController extends BaseController
{
    public function index()
    {
        return view('karyawan/index');
    }

    public function add()
    {
        return view('karyawan/add');
    }
}
