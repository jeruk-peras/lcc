<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KaryawanModel;
use CodeIgniter\HTTP\ResponseInterface;

class KaryawanController extends BaseController
{
    protected $ModelKaryawan;

    public function __construct()
    {
        $this->ModelKaryawan = new KaryawanModel();
    }

    public function index()
    {
        return view('karyawan/index');
    }

    public function add()
    {
        return view('karyawan/add');
    }

    public function save(){
        $arraypost = $this->request->getPost(); // menangkap data post

        // setup insert data
        $data = [
            'nama_karyawan' => $arraypost['nama_karyawan'],
            'no_telepon' => $arraypost['no_telepon'],
            'email' => $arraypost['email'],
            'alamat' => $arraypost['alamat'],
            'username' => $arraypost['username'],
            'password' => $arraypost['password'],
            'role' => $arraypost['role']
        ];

        // dd($data);

        // save data
        $this->ModelKaryawan->save($data);
    }

}
