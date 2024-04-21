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

            $url = 'https://4cbpgmyoie.execute-api.ap-southeast-2.amazonaws.com/Development/smartSoil1' ;

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

            $post = Http::asForm()->withBody($data_matang,'application/json')->post($url);

            // dd($post);

            $hasil_respon = $post->body();

            // dd($hasil_respon);

            $respon_php = json_decode($hasil_respon);

            // dd($respon_php);

            if($respon_php->Message == 'SUCCESS'){

                return redirect()->back()->with('success','Data Berhasil ditambahkan');

            }else{
                return redirect()->back()->with('error','Data gagal ditambahkan');
            }

        }   

    }

    public function index2(){

        if(Auth::user()->hasRole('superadmin')){

            return view('admin.SmartSoil2.index');

        }

    }

}
