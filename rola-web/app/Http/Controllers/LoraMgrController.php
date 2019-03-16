<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lora;
use Illuminate\Support\Facades\Auth;
class LoraMgrController extends Controller
{
    //首页
    public static function index() {
        $currentLoginUser = Auth::user();
        return view('home')->with('rolas',$currentLoginUser->loraSets);
    }
    //一个Lora的详细页面
    public function detail($id) {
        $currentLoginUser = Auth::user();
        return view('lora.detail')->with('rola',$currentLoginUser->loraSets->find($id));
    } 

    public function addView() {
        return view('lora.add');
    }

    public function add(Request $request) {
        Lora::create([
            "name" => $request["name"],
            "user_id" => null,
            "indicator_switch" => 1,
            "indicator_r" =>  $request["indicator_r"],
            "indicator_g" => $request["indicator_g"],
            "indicator_b" => $request["indicator_b"],
            "dim" =>$request["dim"],
            "description" => $request["description"],
        ]);
        //return $request;
        return $this->adminIndex();
    }

    public function adminIndex() {
        $rolas = Lora::all();
        return view('admin.index')->with('rolas',$rolas);
    }

}
