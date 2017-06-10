<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function percobaan()
    {
    	$a="Nopi Latipah";
    	$b="jajang";
    	return view('index',compact('a','b'));
    }

    public function satu($id)
    {
    	return view('welcome');
    }

     public function coba($a)
    {
    	return view('welcome2', compact('a'));
    }

    public function dua()
    {
    	$a="Nopi";
    	$b="Nopi";
    	$c="Nopi";
    	$d="Nopi";
    	$e="Nopi";
    	$f="Dua";
    	return view('2',compact('a','b','c','d','e','f'));
    }

    public function tiga()
    {
    	$a="Nopi";
    	$b="Nopi";
    	$c="Nopi";
    	$d="Nopi";
    	$e="Nopi";
    	$f="Tiga";
    	return view('3',compact('a','b','c','d','e','f'));
    }

    public function empat()
    {
    	$a="Nopi";
    	$b="Nopi";
    	$c="Nopi";
    	$d="Nopi";
    	$e="Nopi";
    	$f="Empat";
    	return view('index',compact('a','b','c','d','e','f'));
    }

    public function lima()
    {
    	$a="Nopi";
    	$b="Nopi";
    	$c="Nopi";
    	$d="Nopi";
    	$e="Nopi";
    	$f="Lima";
    	return view('index',compact('a','b','c','d','e','f'));
    }
}
