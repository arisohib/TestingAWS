<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengukuranController extends Controller
{
    public function index()
    {

        if (Auth::user()->hasRole('superadmin')) {

            return view('admin.Pengukuran.index');
        } elseif (Auth::user()->hasRole('admin')) {

            return view('admin2.Pengukuran.index');

        } elseif (Auth::user()->hasRole('yantek')) {

            return view('Yantek.Pengukuran.index');
        } elseif (Auth::user()->hasRole('fasop')) {

            return view('fasop.Pengukuran.index');
        }
    }
}
