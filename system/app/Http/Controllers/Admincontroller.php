<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Admincontroller extends Controller {
	
	function showBeranda() {
		return view('Beranda_d_V');
	}

	function showProduk() {
		return view('Produk_d_V');
	}


	function showKatagori() {
		return view('Kategori_d_V');
	}

	function showUser() {
		return view('User_d_V');
	}



	
}