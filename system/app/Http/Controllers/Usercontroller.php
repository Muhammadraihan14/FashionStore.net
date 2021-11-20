<?php
namespace App\Http\Controllers;
use App\Models\User;

class Usercontroller extends Controller {
	
	function index() {
		$data['list_user'] = User::all();
		return view('template.User.index', $data);
	}

	function create() {
		return view('template.User.create');
	}


	function store() {
		// dd(request()->all());
		$user = new User;
		$user->nama = request ('nama');
		$user->alamat = request ('alamat');		
		$user->email = request ('email');
		$user->nohp = request ('nohp');
		$user->password = bcrypt(request ('password'));
		$user->save();

		return redirect('user')->with('success', 'Data Berhasil Ditambahkan');

	}

	function show(User $user) {
		// dd(request()->all());
		// echo $user;
		$data['user'] = $user;
		return view('template.user.show', $data);

	}

	function edit(User $user) {
		$data['user'] = $user;
		return view('template.user.edit', $data);
		
	}
	function update(User $user) {
		$user->nama = request ('nama');
		$user->alamat = request ('alamat');		
		$user->email = request ('email');
		$user->nohp = request ('nohp');
	if(request('password')) $user->password = bcrypt(request ('password'));
		$user->save();
		return redirect('user')->with('warning', 'Data Berhasil Diubah');
		
	}
	function destroy(User $user){
 		$user->delete();
 		return redirect('user')->with('danger', 'Data Berhasil Dihapus');


		
	}



	
}