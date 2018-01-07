<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Transaction;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function index()
    {
      $user = User::find(1);
    	return view('pages/payment', ['user'=>$user]);
    }

    public function pay(Request $request)
    {
      $user = User::find(1);

      $data = $request->validate([
        'nama' => 'required|max:255',
        'email' => 'required|email|max:255',
        'telp' => 'required|max:255',
        'alamat' => 'required|max:255',
      ]);

      $mytime = Carbon::now();

      $transaction = new Transaction;
      $transaction->id_user = $user->id;
      $transaction->tgl_pesan = $mytime->toDateTimeString();
      $transaction->nama = $data['nama'];
      $transaction->email = $data['email'];
      $transaction->telp = $data['telp'];
      $transaction->alamat = $data['alamat'];

      $transaction->save();

      // $link = tap(new App\Contact($data))->save();

      return redirect('/home');
    }
}
