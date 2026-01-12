<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function detail($nama, $kelas = "rpl" ){
        return "nama saya $nama, kelas saya $kelas";
    }

    public function Student(){
        return "Halaman Student";
    }
    public function name($nama){
        return "Nama saya:$nama";
    }
}
