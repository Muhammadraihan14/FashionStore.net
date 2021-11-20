<?php


namespace App\Http\Controllers;
use App\Models\Produk;

class Produkcontroller extends Controller {
	
	function index() {
		$data['list_produk'] = Produk::all();
		return view('template.Produk.index', $data);
	}

	function create() {
		return view('template.Produk.create');
	}


	function store() {
		// dd(request()->all());
		$produk = new Produk;
		$produk->nama_produk = request ('nama');
		$produk->gambar_produk = request ('gambar');
		$produk->stok_produk = request ('stok');
		$produk->harga_produk = request ('harga');
		$produk->berat = request ('berat');
		$produk->keterangan_produk = request ('deskripsi');
		$produk->save();

		return redirect('produk')->with('success', 'Data Berhasil Ditambahkan');

	}

	function show(Produk $produk) {
		// dd(request()->all());
		// echo $produk;
		$data['produk'] = $produk;
		return view('template.Produk.show', $data);

	}

	function edit(Produk $produk) {
		$data['produk'] = $produk;
		return view('template.Produk.edit', $data);
		
	}
	function update(Produk $produk) {
		$produk->nama_produk = request ('nama');
		$produk->gambar_produk = request ('gambar');
		$produk->stok_produk = request ('stok');
		$produk->harga_produk = request ('harga');
		$produk->berat = request ('berat');
		$produk->keterangan_produk = request ('deskripsi');
		$produk->save();
		
		return redirect('produk')->with('warning', 'Data Berhasil Diubah');
		
	}
	function destroy(Produk $produk){
 		$produk->delete();
 		return redirect('produk')->with('danger', 'Data Berhasil Dihapus');


		
	}



	
}