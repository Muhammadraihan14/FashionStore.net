@extends ('template.Interface_Admin.base_d')

@section('konten')

<div class="container">
    <div class="row">
		<div class="col-md-12 mt-5 ">
			<div class="card">
			  <div class="card-header bg-secondary">
				Detail User
			</div>
			<div class="card-body">
		{{-- 	<p>
				Nama : {{$user->nama}} 
				Alamat : {{$user->alamat}}  
				Nomor Hp  : {{$user->nohp}}
				Email : {{$user->email}}
			</p> --}}

			<ul>
				<li style="list-style:none;">Nama : {{$user->nama}}</li>
				<li style="list-style:none;">Alamat : {{$user->alamat}}</li>
				<li style="list-style:none;">Nomor Hp  : {{$user->nohp}}</li>
				<li style="list-style:none;">Email : {{$user->email}}</li>
			</ul>

			
			
			<a class="btn btn-dark float-right" href="{{url ('user')}}">kembali</a>
			</div>

		</div>
	</div>
</div>
</div>

@endsection