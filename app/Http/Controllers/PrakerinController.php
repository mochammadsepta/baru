<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    //
    public function percobaan()
    {
    	$a= "Mochammad Septa";
    	$b= "jajang nurjaman";
    	$c= "essien";
    	$d= "maitimo";
    	$e= "cole";
    	return view('index', compact('a', 'b', 'c', 'd', 'e'));
    }
    public function buah()
    {
    	$a= "jeruk";
    	$b= "apel";
    	$c= "anggur";
    	$d= "semangka";
    	$e= "pisang";
    	return view('buah', compact('a', 'b', 'c', 'd', 'e'));
    }
    public function barang()
    {
    	$a= "baju";
    	$b= "sepatu";
    	$c= "jaket";
    	$d= "topi";
    	$e= "sendal";
    	return view('barang', compact('a', 'b', 'c', 'd', 'e'));
    }
    public function kendaraan()
    {
    	$a= "motor";
    	$b= "mobil";
    	$c= "becak";
    	$d= "sepedah";
    	$e= "angkot";
    	return view('kendaraan', compact('a', 'b', 'c', 'd', 'e'));
    }
    public function hobi()
    {
    	$a= "sepak bola";
    	$b= "basket";
    	$c= "voli";
    	$d= "renang";
    	$e= "tenis meja";
    	return view('hobi', compact('a', 'b', 'c', 'd', 'e'));
    }
    public function param($id)
    {
    	return view('welcome');
    }
    public function parameter($a)
    {
    	return view('welcome2', compact('a'));
    }
}
