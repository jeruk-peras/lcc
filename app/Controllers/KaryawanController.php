<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KaryawanModel;
use CodeIgniter\HTTP\ResponseInterface;

class KaryawanController extends BaseController
{
    protected $ModelKaryawan;
    protected $validation;

    protected $setRules = [
        'nama_karyawan' => 'required|max_length[100]',
        'no_telepon' => 'required|numeric|max_length[15]',
        'email' => 'required|valid_email|max_length[100]',
        'alamat' => 'required|max_length[200]',
        'username' => 'required|max_length[50]',
        'password' => 'required|max_length[50]',
        'role' => 'required',
    ];

    public function __construct()
    {
        // load model karyawan
        $this->ModelKaryawan = new KaryawanModel();
        // load lib validation
        $this->validation = \Config\Services::validation(); 
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
