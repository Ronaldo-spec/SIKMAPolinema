<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use App\Models\Kualifikasi;
use App\Models\JenisMitra;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = Auth::user();
        $kerjasama = Kerjasama::count();
        $dn = Kerjasama::where('kualifikasi_id', '=', 1)->count();
        $ln = Kerjasama::where('kualifikasi_id', '=', 2)->count();
        $tp = Kerjasama::where('jenismitra_id', '=', 1)->count();
        $industri = Kerjasama::where('jenismitra_id', '=', 2)->count();
        $lembaga = Kerjasama::where('jenismitra_id', '=', 3)->count();
        $pemerintah = Kerjasama::where('jenismitra_id', '=', 4)->count();
        $user = User::count();

        return view('index', compact('users','kerjasama','dn','ln','tp','industri','lembaga','pemerintah','user'));
    }
}
