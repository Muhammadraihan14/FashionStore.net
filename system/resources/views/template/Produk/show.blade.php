@extends ('template.Interface_Admin.base_d')

@section('konten')

<div class="container">
    <div class="row">
		<div class="col-md-12 mt-5 ">
			<div class="card">
			  <div class="card-header bg-secondary">
				Detail Produk
			</div>
			<div class="card-body">
				<h3>{{$produk->nama_produk}}</h3>
			<p>
				Harga : RP. {{number_format($produk->harga_produk)}} | Berat : {{$produk->berat_produk}} | Stok : {{$produk->stok_produk}}
			</p>
			<h 5>Deskripsi</h5>
			<p>
				{!! nl2br($produk->keterangan_produk) !!}
			</p>
			<a class="btn btn-dark float-right" href="{{url (' produk')}}">kembali</a>
			</div>

		</div>
	</div>
</div>
</div>

@endsection