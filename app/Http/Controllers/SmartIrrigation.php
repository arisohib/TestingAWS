<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SmartIrrigation extends Controller
{
    public function index()
    {

        $url = 'https://mhj6nk8m26.execute-api.ap-southeast-2.amazonaws.com/Development/SmartIrrigation';

        // dd($url);

        $data = Http::get($url)->body();

        // dd($data);

        // dd(json_decode($data));

        $datairrigation = json_decode($data);
        // dd($datairrigation);

        // foreach ($datasoil as $data2) {
        //     $suhu[] = $data2->Suhu;
        //     $ph[] = $data2->PH;
        //     $nitrogen[] = $data2->Nitrogen;
        //     $kalium[] = $data2->Kalium;
        //     $ec[] = $data2->EC;
        //     $fosfor[] = $data2->Fosfor;
        //     // dd($suhu);
        // }

        // dd($nitrogen);

        return view('admin.Irrigation.index', compact('datairrigation'));
    }
}
