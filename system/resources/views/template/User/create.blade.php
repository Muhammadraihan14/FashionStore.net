@extends('template.Interface_Admin.base_d')

@section('konten')

<div class="container">
    <div class="row">
		<div class="col-md-12 mt-5 ">
			<div class="card">
			  <div class="card-header">
				Tambah data user
			</div>
			<div class="card-body">
				<form action="{{url ('user')}}" method="post">
					@csrf
				<div class="form-group">
					<label class="control-label">
						Nama
					</label>
					<input type="text" class="form-control" name="nama"></input>
				</div>
				<div class="form-group">
					<label class="control-label">
						Alamat
					</label>
					<input type="text" class="form-control" name="alamat"></input>
				</div>
				<div class="form-group">
					<label class="control-label">
						Email
					</label>
					<input type="Email" class="form-control" name="email"></input>
				</div>
				<div class="form-group">
					<label class="control-label">
						Nomor Hp
					</label>
					<input type="text" class="form-control" name="nohp"></input>
				</div>
				<div class="form-group">
					<label class="control-label">
						Password
					</label>
					<input type="password" class="form-control" name="password"></input>
				</div>

				
					
			

				<button type="submit" class="btn btn-success float-right"><i class="fa fa-save"></i>  Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
