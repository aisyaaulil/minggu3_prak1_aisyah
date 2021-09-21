<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        return view('welcomeaisyah');
    }
    public function d3mi(){
        return view('prodii.mi');
    }
    public function d4ti(){
        return view('prodii.ti');
    }
    public function newsti($kbrti){
        return view ('news',['kbrti' => $kbrti]);
    }
    public function aboutus(){
        return view ('about');
    }
    public function kantor(){
        return view('sarana.perkantor');
    }
    public function kelas(){
        return view('sarana.ruangkelas');
    }
    public function lab(){
        return view('sarana.lab');
    }
    public function lain(){
        return view('sarana.lainlain');
    }
    public function comment($yourname, $yourmessages){
        return view ('comment', ['yourname' => $yourname, 'yourmessages' => $yourmessages]);
    }
}
