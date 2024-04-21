<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomisioningController extends Controller
{
    public function index(){

        if(Auth::user()->hasRole('superadmin')){

            return view('admin.Komisioning.index');

        }elseif(Auth::user()->hasRole('admin')){

            return view('admin2.Komisioning.index');

        }elseif(Auth::user()->hasRole('yantek')){

            return view('Yantek.Komisioning.index');

        }elseif(Auth::user()->hasRole('fasop')){

            return view('fasop.Komisioning.index');

        }
    }
}
