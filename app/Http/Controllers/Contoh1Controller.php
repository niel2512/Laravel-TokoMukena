<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
 
use Illuminate\Support\Str; //tambahan untuk penggunaan helper string

class Contoh1Controller extends Controller
{
    public function show()
    {
        return "Halo ini adalah contoh kontroller sederhana tanpa view";
    }

    public function validasilogin(Request $request)
    {
        if(
            ($request->username=='niel') and ($request->password=='141414')
           ){
                return 'berhasil login';
        }else{
                return 'gagal login';
        }
    }

    // tes helper custom
    public function teshelpercustom(){
        $angka = 5500000;
        echo rupiah($angka);
    }

    // tes helper masking
    public function cobamasking(){
        $angka = Str::of('081321405677')->mask('*', -3);
        echo $angka;
    }
}