<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SmartWeather extends Controller
{
    public function Agriculture(){

        $url = 'https://3uojc35gb6.execute-api.ap-southeast-2.amazonaws.com/SmartWeather/SmartWeatherAgriculture';

        // dd($url);

        $data = Http::get($url)->body();

        $dataWeather = json_decode($data);
        // dd($dataWeather);

        return view('admin.Weather.IndexAgriculture', compact('dataWeather'));
        

    }

    public function SAR(){

        $url = 'https://3uojc35gb6.execute-api.ap-southeast-2.amazonaws.com/SmartWeather/SmartWeatherSAR';

        // dd($url);

        $data = Http::get($url)->body();

        $dataWeathersar = json_decode($data);
        // dd($dataWeathersar);

        return view('admin.Weather.IndexSAR', compact('dataWeathersar'));


    }

}
