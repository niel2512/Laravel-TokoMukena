<?php

namespace App\Http\Controllers;

// untuk mengakses http
use Illuminate\Support\Facades\Http;

class BeritaController extends Controller
{
    // untuk tes response dari API
    public function index()
    {
        $response = Http::get('https://newsapi.org/v2/everything?q=backend developer&pagesize=12&sortBy=popularity&publishedAt&apiKey=39751ff5f0194ec39be1761b66e6ea07');
        $hasil = json_decode($response);
        // var_dump($hasil);

        if($hasil->status=="ok"){
            echo "Jumlah Status     : ".$hasil->status."<br>";
            echo "Jumlah Results    : ".$hasil->totalResults."<br>";
            echo "Sumber Artikel-1  : ".$hasil->articles[0]->source->name."<br>";
            echo "Nama Artikel-2    : ".$hasil->articles[1]->title."<br>";
            echo "URL Gambar        : ".$hasil->articles[1]->urlToImage."<br>";

            // dapatkan jumlah datanya
            echo "<hr>";
            foreach ($hasil->articles as $row){
                echo $row->source->name."-".$row->author."-".$row->title."-".$row->url."-".$row->description."-".$row->urlToImage;
                echo "<br>"; 
            } 
               
        }
    }

    // untuk galeri berita
    public function getNews(){
        // akses API
        $response = Http::get('https://newsapi.org/v2/everything?q=backend developer&pagesize=12&sortBy=popularity&publishedAt&apiKey=39751ff5f0194ec39be1761b66e6ea07');
        $hasil = json_decode($response);

        return view(
            'berita/berita',
            [
                'hasil' => $hasil
            ]
        );
    }


    // tes untuk data pengusaha
    public function data(){
        // akses API
        $url = "http://data.bandung.go.id/index.php/portal/api/380be694-eadb-4d45-b51f-e0e89f86766a";
        $response = Http::get($url);
        $hasil = json_decode($response);

        return view(
            'berita/berita',
            [
                'hasil' => $hasil
            ]
        );
    }
}
