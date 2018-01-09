<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\User;

class ContactController extends Controller
{
    public function index()
    {
      $user = User::find(1);
    	return view('pages/contact',['user'=>$user]);
    }

    public function add(Request $request)
    {
      $data = $request->validate([
        'nama' => 'required|max:255',
        'email' => 'required|email|max:255',
        'subjek' => 'required|max:255',
        'pesan' => 'required|max:255',
      ]);

      $contact = new Contact;
      $contact->nama = $data['nama'];
      $contact->email = $data['email'];
      $contact->subjek = $data['subjek'];
      $contact->pesan = $data['pesan'];

      $contact->save();

      // $link = tap(new App\Contact($data))->save();

      return redirect('/home');
    }
}
