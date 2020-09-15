<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller
{
    public function tabung (Request $request)
    {
        $first_num = $request->input('input1');
        $sec_num = $request->input('input2');
        $result= $first_num * $sec_num;        
        
        return redirect('/tabung')->with('hasil','Volume Tabung adalah: ' . $result);       
    }

    public function bola(Request $request) 
    {
        $finger = $request->input('jari');       
        $phi = 3.14;

        $result = 4/3 * $phi * $finger * $finger * $finger;
        
        return redirect('/bola')->with('hasil','Volume Bola adalah: ' . $result);       

    }

    public function kerucut(Request $request)
    {
        $phi = 3.14;
        $finger = $request->input('jari');
        $tinggi = $request->input('tinggi');

        $result = 1/3 * $phi * $finger * $finger * $tinggi;

        return redirect('/kerucut')->with('hasil','Volume Kerucut adalah: ' . $result);
    }
}
