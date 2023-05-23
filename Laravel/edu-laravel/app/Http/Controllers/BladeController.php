<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function index() {
        $arr = [
            'name' => '백유정'
            ,'gender' => '여자'
            , 'birth' => '940517'
            ,'addr' => '대구'
            ,'tel' => '01065857992'
        ];

        $arr2 = [];
        return view('blade')->with('data', $arr)->with('data2', $arr2);
    }
}
