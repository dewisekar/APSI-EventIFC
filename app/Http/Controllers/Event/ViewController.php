<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function index(){
        return view('event.panitia.admindashboard');
    }
    public function showPeserta(){
    	return view('event.panitia.peserta');
    }
    public function detailPeserta(){
    	return view('event.panitia.detailpeserta');
    }
    public function showJadwal(){
    	return view('event.panitia.jadwal');
    }
    public function hasilPertandingan(){
    	return view('event.panitia.hasilpertandingan');
    }
    public function loginPanitia(){
    	return view('event.panitia.login');
    }
    public function pesertaDashboard(){
    	return view('event.peserta.dashboard');
    }
    public function berkasPeserta(){
    	return view('event.peserta.data');
    }
    public function loginPeserta(){
    	return view('event.peserta.login');
    }
    public function dashboardEvent(){
    	return view('event.umum.home');
    }
    public function jadwalEvent(){
    	return view('event.umum.jadwal');
    }
    public function hasilEvent(){
    	return view('event.umum.hasilpertandingan');
    }
}
