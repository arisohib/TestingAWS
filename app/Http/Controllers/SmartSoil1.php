<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class SmartSoil1 extends Controller
{
    public function index(){

        if(Auth::user()->hasRole('superadmin')){

            $url = 'https://4cbpgmyoie.execute-api.ap-southeast-2.amazonaws.com/Development/AllDataSmartSoil';

            $data = Http::get($url)->body();

            // dd(json_decode($data));

            $datasoil = json_decode($data);
            // dd($datasoil);

            foreach($datasoil as $data2){
                $suhu[] = $data2->Suhu;
                $ph[] = $data2->PH;
                $nitrogen[] = $data2->Nitrogen;
                $kalium[] = $data2->Kalium;
                $ec[] = $data2->EC;
                $fosfor[] = $data2->Fosfor;
                // dd($suhu);
            }

            // dd($nitrogen);

            return view('admin.SmartSoil1.index',compact('datasoil','suhu','ph','nitrogen','kalium','ec','fosfor'));

        }

    }

    public function InputManual(){

        if(Auth::user()->hasRole('superadmin')){
            return view('admin.SmartSoil1.InputManual');

        }

    }

    public function storeData(Request $request){

        if(Auth::user()->hasRole('superadmin')){

            $data = [
                'idsoid' => $request->idsoil,
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

            // dd($data);

        }   

    }

    public function index2(){

        if(Auth::user()->hasRole('superadmin')){

            return view('admin.SmartSoil2.index');

        }

    }

}
