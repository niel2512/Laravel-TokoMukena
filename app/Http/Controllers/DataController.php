<?php

namespace App\Http\Controllers;

// untuk mengakses http
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    // untuk tes response dari API
    public function index()
    {
        $url = "http://data.bandung.go.id/index.php/portal/api/380be694-eadb-4d45-b51f-e0e89f86766a";
        $response = Http::get($url);
        $hasil = json_decode($response);
        // var_dump($hasil);


            // dapatkan jumlah datanya
            echo "<hr>";
            foreach ($hasil->data as $row){
                echo $row->no."-".$row->kelurahan."-".$row->nama."-".$row->jenis_usaha."-".$row->alamat;
                echo "<br>"; 
            } 
               
        
    }

    // untuk galeri data
    public function getNews(){
        // akses API
        $url = "http://data.bandung.go.id/index.php/portal/api/380be694-eadb-4d45-b51f-e0e89f86766a";
        $response = Http::get($url);
        $hasil = json_decode($response);

        return view(
            'data/data',
            [
                'hasil' => $hasil
            ]
        );
    }
}
