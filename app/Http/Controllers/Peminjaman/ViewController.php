<?php

namespace App\Http\Controllers\Peminjaman;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function index(){
    	return view('peminjaman.main');
    }
}
