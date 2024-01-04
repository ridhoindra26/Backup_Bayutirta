<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Layanan;

class ServiceController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        return view('service',[
            'layanan' => $layanans]);
    }

    public function servicedetail()
    {
        return view('servicedetail');
    }
}
