<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssetMenuController extends Controller
{

    //Asset Menu Keypoint
    public function index()
    {

        if (Auth::user()->hasRole('superadmin')) {
            return view('admin.AssetMenu.index');
        } elseif (Auth::user()->hasRole('admin')) {

            return view('admin2.AssetMenu.index');
        } elseif (Auth::user()->hasRole('yantek')) {

            return view('Yantek.AssetMenu.index');
        } elseif (Auth::user()->hasRole('fasop')) {

            return view('fasop.AssetMenu.index');
        }
    }

    //Asset Menu RTU
    public function RTU()
    {

        if (Auth::user()->hasRole('superadmin')) {
            return view('admin.AssetMenu.RTU.index');

        } elseif (Auth::user()->hasRole('admin')) {

            return view('admin2.AssetMenu.RTU.index');

        } elseif (Auth::user()->hasRole('yantek')) {

            return view('Yantek.AssetMenu.RTU.index');
        } elseif (Auth::user()->hasRole('fasop')) {

            return view('fasop.AssetMenu.RTU.index');
        }
    }

    //Asset Menu Rectifier
    public function rectifier()
    {

        if (Auth::user()->hasRole('superadmin')) {
            return view('admin.AssetMenu.Rectifier.index');
        }elseif (Auth::user()->hasRole('admin')) {

            return view('admin2.AssetMenu.Rectifier.index');

        } elseif (Auth::user()->hasRole('yantek')) {

            return view('Yantek.AssetMenu.Rectifier.index');
        } elseif (Auth::user()->hasRole('fasop')) {

            return view('fasop.AssetMenu.Rectifier.index');
        }
    }


    //Batere
    public function Battere()
    {

        if (Auth::user()->hasRole('superadmin')) {

            return view('admin.AssetMenu.Battery.index');

        }elseif (Auth::user()->hasRole('admin')) {

            return view('admin2.AssetMenu.Battery.index');

        } elseif (Auth::user()->hasRole('yantek')) {

            return view('Yantek.AssetMenu.Battery.index');
        } elseif (Auth::user()->hasRole('fasop')) {

            return view('fasop.AssetMenu.Battery.index');
        }
    }

    //Server
    public function server()
    {
        if (Auth::user()->hasRole('superadmin')) {

            return view('admin.AssetMenu.ServerMenu.index');

        }elseif (Auth::user()->hasRole('admin')) {

            return view('admin2.AssetMenu.ServerMenu.index');

        } elseif (Auth::user()->hasRole('yantek')) {

            return view('Yantek.AssetMenu.ServerMenu.index');

        } elseif (Auth::user()->hasRole('fasop')) {

            return view('fasop.AssetMenu.ServerMenu.index');
        }
    }

    //Gateway
    public function gateway()
    {
        if (Auth::user()->hasRole('superadmin')) {

            return view('admin.AssetMenu.GatewayMenu.index');

        }elseif (Auth::user()->hasRole('admin')) {

            return view('admin2.AssetMenu.GatewayMenu.index');

        } elseif (Auth::user()->hasRole('yantek')) {

            return view('Yantek.AssetMenu.GatewayMenu.index');

        } elseif (Auth::user()->hasRole('fasop')) {

            return view('fasop.AssetMenu.GatewayMenu.index');
        }
    }

    //Radio

    public function radio()
    {
        if (Auth::user()->hasRole('superadmin')) {

            return view('admin.AssetMenu.Radio.index');

        }elseif (Auth::user()->hasRole('admin')) {

            return view('admin2.AssetMenu.Radio.index');

        } elseif (Auth::user()->hasRole('yantek')) {

            return view('Yantek.AssetMenu.Radio.index');

        } elseif (Auth::user()->hasRole('fasop')) {

            return view('fasop.AssetMenu.Radio.index');
        }
    }

    //Tagging
    public function tagging()
    {
        if (Auth::user()->hasRole('superadmin')) {

            return view('admin.AssetMenu.DataTagging.index');

        }elseif (Auth::user()->hasRole('admin')) {

            return view('admin2.AssetMenu.DataTagging.index');

        } elseif (Auth::user()->hasRole('yantek')) {

            return view('Yantek.AssetMenu.DataTagging.index');

        } elseif (Auth::user()->hasRole('fasop')) {

            return view('fasop.AssetMenu.DataTagging.index');
        }
    }
}
