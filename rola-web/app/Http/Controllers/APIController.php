<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lora;
use App\User;

class APIController extends Controller
{
    //
    public function index() {
        return view('api.index');
    }
    // 获取全部的lora状态 /rola 
    public function indexRola(){
        return Lora::all();
    }
    public function indexUser(){
        return User::all();
    }
    public function newRola(Request $request) {
        try {
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
        } catch (\Exception $e) {
            return response()->json(['seccuss'=> 'no', 'msg' => $e->getMessage()]);
        } 
        return response()->json(['seccuss'=> 'yes', 'msg' => 'ok']);
    }
    public function searchByLoraIdx($id){
        $result = null;
        try {
            $result = Lora::find($id);
            if(!$result) throw new \Exception("lora id not found");
        } catch (\Exception $e) {
            return response()->json(['seccuss'=> 'no', 'msg' => $e->getMessage()]);
        }
        return $result;
    }

    public function searchLoraByUserId($user_id){
        $result = null;
        try {
            $result = Lora::find($user_id);
            if(!$result) throw new \Exception("user id not found");
        } catch (\Exception $e) {
            return response()->json(['seccuss'=> 'no', 'msg' => $e->getMessage()]);
        }
        return $result;
    }

    //Assign Loara to a user
    public function assignLoraToUser(Request $req) {
        $lora = Lora::find($req['lora_id']);
        return $lora;
    }
}