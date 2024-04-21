<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkOrderController extends Controller
{
    public function index(){

        if(Auth::user()->hasRole('superadmin')){

            return view('admin.WorkOrder.index');

        }elseif(Auth::user()->hasRole('admin')){

            return view('admin2.WorkOrder.index');

        }elseif(Auth::user()->hasRole('yantek')){

            return view('Yantek.WorkOrder.index');

        }elseif(Auth::user()->hasRole('fasop')){

            return view('fasop.WorkOrder.index');

        }


    }
}
