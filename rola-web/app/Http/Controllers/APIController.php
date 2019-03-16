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
}
