<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class PemainController extends Controller
{
    public function index(){
        $data_pemain = Pemain::all();
        return view('pemain.index', compact('data_pemain'));
    }
}
