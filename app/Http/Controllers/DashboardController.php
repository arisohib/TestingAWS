<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        if(Auth::user()->hasRole('superadmin')){
            return view('admin.index');

        }elseif(Auth::user()->hasRole('admin')){

            return view('admin2.index');

        }elseif(Auth::user()->hasRole('yantek')){

            return view('Yantek.index');

        }elseif(Auth::user()->hasRole('fasop')){

            return view('fasop.index');

        }


    }
}
