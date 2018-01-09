<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
      $data = $request->validate([
        'nama' => 'required|max:255',
        'email' => 'required|email|unique:users|max:255',
        'telp' => 'required|max:255',
        'password' => 'required|min:6',
        'password2' => 'required|same:password',
        'alamat' => 'required|max:255',
      ]);

      $user = new User;
      $user->name = $data['nama'];
      $user->email = $data['email'];
      $user->telp = $data['telp'];
      $user->password = bcrypt($data['password']);
      $user->alamat = $data['alamat'];

      $user->save();
      return view('pages.login');
    }
}
