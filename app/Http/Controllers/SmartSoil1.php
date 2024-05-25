<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class SmartSoil1 extends Controller
{
    public function index()
    {

        if (Auth::user()->hasRole('superadmin')) {

            $url = 'https://4cbpgmyoie.execute-api.ap-southeast-2.amazonaws.com/Development/AllDataSmartSoil';

            // dd($url);

            $data = Http::get($url)->body();

            // dd($data);

            // dd(json_decode($data));

            $datasoil = json_decode($data);
            // dd($datasoil);

            foreach ($datasoil as $data2) {
                $suhu[] = $data2->Suhu;
                $ph[] = $data2->PH;
                $nitrogen[] = $data2->Nitrogen;
                $kalium[] = $data2->Kalium;
                $ec[] = $data2->EC;
                $fosfor[] = $data2->Fosfor;
                // dd($suhu);
            }

            // dd($nitrogen);

            return view('admin.SmartSoil1.index', compact('datasoil', 'suhu', 'ph', 'nitrogen', 'kalium', 'ec', 'fosfor'));
        }
    }

    public function InputManual()
    {

        if (Auth::user()->hasRole('superadmin')) {
            return view('admin.SmartSoil1.InputManual');
        }
    }

    public function storeData(Request $request)
    {

        if (Auth::user()->hasRole('superadmin')) {

            $url = 'https://4cbpgmyoie.execute-api.ap-southeast-2.amazonaws.com/Development/smartSoil1';

            $data = [
                'idsoil' => $request->idsoil,
                'Suhu' => $request->suhu,
                'Soil Moisture' => $request->soilmoisture,
                'PH' => $request->ph,
                'Nitrogen' => $request->nitrogen,
                'Kalium' => $request->kalium,
                'EC' => $request->ec,
                'Fosfor' => $request->fosfor,
                'Lattitude' => $request->latitude,
                'Longtitude' => $request->longitude,
            ];

            $data_matang = json_encode($data);

            // dd($data_matang);

            $post = Http::asForm()->withBody($data_matang, 'application/json')->post($url);

            // dd($post);

            $hasil_respon = $post->body();

            // dd($hasil_respon);

            $respon_php = json_decode($hasil_respon);

            // dd($respon_php);

            if ($respon_php->Message == 'SUCCESS') {

                return redirect()->back()->with('success', 'Data Berhasil ditambahkan');
            } else {
                return redirect()->back()->with('error', 'Data gagal ditambahkan');
            }
        }
    }


    public function indexHome()
    {

        $url = 'https://mhj6nk8m26.execute-api.ap-southeast-2.amazonaws.com/Development/AllDataSmartSoil';

        // dd($url);

        $data = Http::get($url)->body();

        // dd($data);

        // dd(json_decode($data));

        $datasoil = json_decode($data);
        // dd($datasoil);

        foreach ($datasoil as $data2) {
            $suhu[] = $data2->temperature;
            $ph[] = $data2->ph;
            $nitrogen[] = $data2->nitrogen;
            $kalium[] = $data2->kalium;
            $ec[] = $data2->conductivity;
            $fosfor[] = $data2->fosfor;
            // dd($suhu);
        }

        // dd($nitrogen);

        return view('admin.SmartSoil1.index', compact('datasoil', 'suhu', 'ph', 'nitrogen', 'kalium', 'ec', 'fosfor'));
    }

    public function tambahData()
    {

        return view('admin.SmartSoil1.InputManual');
    }

    public function StoreDataDatabase(Request $request)
    {
        $url = 'https://4cbpgmyoie.execute-api.ap-southeast-2.amazonaws.com/Development/smartSoil1';

        $data = [
            'idsoil' => $request->idsoil,
            'Suhu' => $request->suhu,
            'Soil Moisture' => $request->soilmoisture,
            'PH' => $request->ph,
            'Nitrogen' => $request->nitrogen,
            'Kalium' => $request->kalium,
            'EC' => $request->ec,
            'Fosfor' => $request->fosfor,
            'Lattitude' => $request->latitude,
            'Longtitude' => $request->longitude,
        ];

        $data_matang = json_encode($data);

        // dd($data_matang);

        $post = Http::asForm()->withBody($data_matang, 'application/json')->post($url);

        // dd($post);

        $hasil_respon = $post->body();

        // dd($hasil_respon);

        $respon_php = json_decode($hasil_respon);

        // dd($respon_php);

        if ($respon_php->Message == 'SUCCESS') {

            return redirect()->back()->with('success', 'Data Berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data gagal ditambahkan');
        }
    }

    public function NPK(){

        $url = 'https://mhj6nk8m26.execute-api.ap-southeast-2.amazonaws.com/Development/NPK';

        // dd($url);

        $data = Http::get($url)->body();

        $datanpk = json_decode($data);
        // dd($dataWeather);

        foreach ($datanpk as $data2) {
            $ph[] = $data2->ph;
            $nitrogen[] = $data2->nitrogen;
            $kalium[] = $data2->kalium;
            $kelembapan[] = $data2->kelembapan;
            $fosfor[] = $data2->phosporus;
            // dd($suhu);
        }


        return view('admin.SmartSoil1.IndexNPK', compact('datanpk', 'ph', 'nitrogen', 'kalium', 'kelembapan', 'fosfor'));


    }


    public function index2()
    {

        if (Auth::user()->hasRole('superadmin')) {

            return view('admin.SmartSoil2.index');
        }
    }
}
