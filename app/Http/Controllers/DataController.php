<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;

class DataController extends Controller
{
    public function test()
    {
    	$a = data::all();
    	return $a;
    }

    public function test2()
    {
    	$a = data::all();
    	return view('index', compact('a'));
    }

    public function test3($nama)
    {
    	$aa=['binatang'=>['kucing','macan'],
    		'laptop'=>['acer','asus'],
    		'kendaraan'=>['mobil','motor']];
    	$a = $aa[$nama];
    	return view('index2', compact('a'));
    }
}
