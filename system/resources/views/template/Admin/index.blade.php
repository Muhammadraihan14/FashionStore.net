@extends('template.Interface_Admin.base_d')


@section('konten')

<div class="container">
    <div class="row">
                <div class="col-md-12 mt-5 ">

                        {{-- <div class="card">
                                <div class="card-header">
                                        Filter
                                        <div class="card-body">
                                                <form action="{{url('admin/produk/filter')}}" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                                <label for="nama" class="control-label">Nama</label>
                                                                <input class="form-control" type="text" name="nama" autocomplete="off"></input>
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="stok" class="control-label">Stok</label>
                                                                <input class="form-control" type="text" name="stok" autocomplete="off"></input>
                                                        </div>

                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label class="control-label" for="harga_min">Harga Min</label>
                                                                                <input class="form-control" type="text" name="harga_min" value="{{$harga_min ?? ""}}"></input>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group">
                                                                                <label class="control-label" for="harga_max">Harga Max</label>
                                                                                <input class="form-control" type="text" name="harga_max" value="{{$harga_max ?? ""}}"></input>
                                                                        </div>
                                                                </div>
                                                        </div>



                                                        <button class="btn btn-primary float-right">Cari  <i class="fa fa-search"></i></button>
                                                </form>
                                        </div>
                                </div>
                        </div> --}}


                        <div class="card">
                          <div class="card-header">
                                Data Admin
                                {{-- admin/ --}}
                                <a href="{{url ('admin/create')}} " class="btn btn-success float-right"><i class="fa fa-plus"></i>  Tambah data</a>
                        </div>
                        <div class="card-body">
                                <table class="table table-data table">
                                        <thead class="bg-dark">
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        


                                        </thead>
                                        

                                        <tbody>
                                                @foreach($list_admin as $admin)

                                    <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                        <div class="btn btn-group">     
                                                        <a href="{{url ('admin', $admin->id_admin)}}" class="btn bg-secondary"><i class="fa fa-info"></i></a>
                                                        <a href="{{url ('admin', $admin->id_admin)}}/edit" class="btn bg-warning"><i class="fa fa-edit"></i></a>
                                                        {{-- <a href="{{url ('produk', $produk->id_produk)}}/edit" class="btn bg-danger"><i class="fa fa-trash"></i></a> --}}
                                                        {{-- <form action="{{url ('produk', $produk->id_produk)}}" method="post" onsubmit="return confirm('Yakin mau di hapus')">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="btn bg-danger"><i class="fa fa-trash"></i></button>
                                                        </form> --}}



                                                        @include('template.utils.delete', ['url' => url ('admin', $admin->id_admin)])
                                                        </div>
                                                </td>
                                                <td>{{$admin->nama_admin}}</td>
                                                <td>{{$admin->harga_admin}}</td>
                                        </tr>

                                                @endforeach

                                        </tbody>
                                 </table>
                        </div>
                </div>
        </div>
</div>



</div>

@endsection             

    