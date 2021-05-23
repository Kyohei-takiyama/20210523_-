<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //[/building => 建物です]
    public function building(){
        return "建物です";
    }
    //[/building/{room} => 部屋番号は$roomです]
    public function room($room){
    return "部屋番号は".$room."です";
    }


    //本日相談したいことです！
    public function error(){
        return "論理エラーはきついです…";
    }
}
