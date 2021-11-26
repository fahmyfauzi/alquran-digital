<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurahController extends Controller
{
    public function detailSurah(int $surah)
    {
        $response = Http::get('https://equran.id/api/surat/' . $surah);
        $datadetail = $response->json();
        // dd($data);
        return view('surat', compact('datadetail'));
    }
}
