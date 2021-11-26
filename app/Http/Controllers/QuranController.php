<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//pendukung client http
use Illuminate\Support\Facades\Http;

class QuranController extends Controller
{
    public function index()
    {
        //api alquran
        $response = Http::get('https://al-quran-8d642.firebaseio.com/data.json?print=pretty');

        //jadikan json
        $data = $response->json();
        // dd($data);
        //tampilkan dan kirim data
        return view('index', compact('data'));
    }

    // public function detailSurah(int $surah)
    // {
    //     $response = Http::get('https://equran.id/api/surat/' . $surah);
    //     $data = $response->json();
    //     // dd($data);
    //     return view('surat', compact('data'));
    // }

    public function cariSurah(Request $request)
    {

        // $cari = $request->cari;

        // $response = Http::get('https://al-quran-8d642.firebaseio.com/data.json?print=pretty');
        // //jadikan json
        // $caridata = $response->json();

        // $cari = trim(strtolower($cari));

        // $key = array_search($cari, array_column($caridata, 'nama'));

        // foreach ($caridata as $k => $v) {
        //     $n = strtolower($v['nama']);
        //     if (strpos($n, $cari) !== false) {
        //         $cari = $v;
        //     }
        // }
        // dd($caridata[$key]);

        $this->validate($request, [
            'cari' => 'required'
        ]);
        $cari = $request->cari;


        $ch = curl_init("https://al-quran-8d642.firebaseio.com/data.json?pretty=true");
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
        ]);
        $data = json_decode(curl_exec($ch), true);
        curl_close($ch);

        $find = [];
        $cari = trim(strtolower($cari));
        foreach ($data as $k => $v) {
            $n = strtolower($v["nama"]);
            if (strpos($n, $cari) !== false) {
                $find[] = $v;
            }
        }

        // dd($find);
        return view('search', compact('data', 'find'));
    }
}
