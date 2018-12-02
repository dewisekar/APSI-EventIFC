<?php

namespace App\Http\Controllers\Anggota;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function login(){
    	return view('anggota.login');
    }

    public function dashboard(){
    	return view('anggota.dashboard');
    }

    public function daftarPemain(){
    	return view('anggota.daftar_pemain');
    }

    public function dataKegiatan(){
    	return view('anggota.data_kegiatan');
    }

    public function presensi(){
    	return view('anggota.presensi');
    }

    public function keaktifan(){
    	return view('anggota.keaktifan');
    }
}
