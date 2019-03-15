<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lora;
use Illuminate\Support\Facades\Auth;
class UCPLoraMgrController extends Controller
{
    //
    public static function index() {
        $currentLoginUser = Auth::user();

        return view('home')->with('rolas',$currentLoginUser->loraSets);

    }
}
