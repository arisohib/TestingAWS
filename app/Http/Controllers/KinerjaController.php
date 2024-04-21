<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KinerjaController extends Controller
{
    public function index()
    {

        if (Auth::user()->hasRole('superadmin')) {

            return view('admin.Kinerja.index');
        } elseif (Auth::user()->hasRole('admin')) {

            return view('admin2.Kinerja.index');
        } elseif (Auth::user()->hasRole('yantek')) {

            return view('Yantek.Kinerja.index');
        } elseif (Auth::user()->hasRole('fasop')) {

            return view('fasop.Kinerja.index');
        }
    }
}
