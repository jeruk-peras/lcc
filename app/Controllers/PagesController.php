<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PagesController extends BaseController
{
    public function index()
    {
        //
        return view("home");
    }

    public function about()
    {
        return view("about");
    }

    public function contac()
    {
        return view("contac");
    }
}
