<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\SendMailJob;
use App\Mail\Notif;
use App\Models\Email;
use App\Models\Kerjasama;
use App\Models\User;
use Carbon\Carbon;

class EmailController extends Controller
{
	public function index()
	{
		$users = User::get();
		$kerjasama = Kerjasama::with('kualifikasi', 'jenismitra')->orderBy('id','ASC')->paginate(5);
		$emails = Email::get();

		return view('emails.index', compact('users', 'kerjasama', 'emails'));
	}

	public function create()
	{
		return view('emails.create');
	}

	public function sendEmail(Request $request)
	{
		$kerjasama = Kerjasama::get();
		$mail = new Email();
		$mail->subject = $request->subject;
		$mail->title = $request->title;
		if ($request->content != null) {
			$mail->body = $request->content;
		}else{
			$mail->body = 'Sehubungan dengan akan berakhirnya kerjasama dengan mitra, maka diberitahukan untuk meninjau kelanjutan dari hubungan kerjasama. Berikut rincian kerjasama yang akan segera berakhir dalam 6 bulan kedepan';
		}
		$mail->save();

		if ($request->sending == "now") {
			$mail->delivered = 'YES';
			$mail->tgl_kirim = date("Y-m-d H:i", strtotime(Carbon::now()));
			$mail->save();
			$users = User::all();
			foreach($users as $user) {
				dispatch(new SendMailJob($user->email, new Notif($mail, $kerjasama)));
			}
			$notification = array(
				'message' => 'Email berhasil dikirim', 
				'alert-type' => 'success'
			);
			return back()->with($notification);
		}
		else{
			$tglkirim = date("Y-m-d H:i", strtotime($request->tgl_kirim));
			$mail->tgl_kirim = date("Y-m-d H:i", strtotime($request->tgl_kirim));
			$mail->save();

			$notification = array(
				'message' => 'Email Akan Dikirim pada '.$tglkirim.' !', 
				'alert-type' => 'info'
			);
			return back()->with($notification);
		}
	}
}
