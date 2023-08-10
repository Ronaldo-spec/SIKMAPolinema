<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use App\Models\Kualifikasi;
use App\Models\JenisMitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class KerjasamaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
     $this->middleware('permission:kerjasama-list|kerjasama-create|kerjasama-edit|kerjasama-delete', ['only' => ['index','show']]);
     $this->middleware('permission:kerjasama-create', ['only' => ['create','store']]);
     $this->middleware('permission:kerjasama-edit', ['only' => ['edit','update']]);
     $this->middleware('permission:kerjasama-delete', ['only' => ['destroy']]);
 }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerjasama = Kerjasama::with('kualifikasi', 'jenismitra')->orderBy('id','ASC')->paginate(5);
        $kualifikasi = Kualifikasi::all();
        $jenismitra  = JenisMitra::all();
        return view('kerjasama.index',compact('kerjasama','kualifikasi', 'jenismitra'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kualifikasi = Kualifikasi::all();
        $jenismitra  = JenisMitra::all();
        return view('kerjasama.create', ['kualifikasi' => $kualifikasi, 'jenismitra' => $jenismitra]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'mitra' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
            'kualifikasi' => 'required',
            'jenis_mitra' => ' required',
            'bentuk_kerjasama' => 'required',
            'telepon' => 'required',
            'email' => 'required'
        ]);

        $kerjasama = new Kerjasama;
        $kerjasama->mitra = $request->get('mitra');
        $kerjasama->tgl_mulai = $request->get('tgl_mulai');
        $kerjasama->tgl_akhir = $request->get('tgl_akhir');

        $kualifikasi = new Kualifikasi;
        $kualifikasi->id = $request->get('kualifikasi');
        $kerjasama->kualifikasi()->associate($kualifikasi);

        $jenismitra = new JenisMitra;
        $jenismitra->id = $request->get('jenis_mitra');
        $kerjasama->jenismitra()->associate($jenismitra);

        $kerjasama->bentuk_kerjasama = $request->get('bentuk_kerjasama');
        $kerjasama->telepon = $request->get('telepon');
        $kerjasama->email = $request->get('email');
        $kerjasama->save();

        $notification = array(
            'message' => 'Data telah berhasil ditambahkan', 
            'alert-type' => 'success'
        );
        return redirect()->route('kerjasama.index')
        ->with($notification);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $kerjasama = Kerjasama::with('kualifikasi','jenismitra')->where('id', $id)->first();
        return view('kerjasama.show',compact('kerjasama'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kerjasama = Kerjasama::find($id);
        $kualifikasi = Kualifikasi::all();
        $jenismitra = JenisMitra::all();
        return view('kerjasama.edit',compact('kerjasama', 'kualifikasi', 'jenismitra'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'mitra' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
            'kualifikasi' => 'required',
            'jenis_mitra' => ' required',
            'bentuk_kerjasama' => 'required',
            'telepon' => 'required',
            'email' => 'required'
        ]);

        $kerjasama = Kerjasama::with('kualifikasi', 'jenismitra')->where('id', $id)->first();
        $kerjasama->mitra = $request->get('mitra');
        $kerjasama->tgl_mulai = $request->get('tgl_mulai');
        $kerjasama->tgl_akhir = $request->get('tgl_akhir');

        $kualifikasi = new Kualifikasi;
        $kualifikasi->id = $request->get('kualifikasi');
        $kerjasama->kualifikasi()->associate($kualifikasi);

        $jenismitra = new JenisMitra;
        $jenismitra->id = $request->get('jenis_mitra');
        $kerjasama->jenismitra()->associate($jenismitra);

        $kerjasama->bentuk_kerjasama = $request->get('bentuk_kerjasama');
        $kerjasama->telepon = $request->get('telepon');
        $kerjasama->email = $request->get('email');
        $kerjasama->save();

        $notification = array(
            'message' => 'Data telah berhasil diedit', 
            'alert-type' => 'success'
        );
        return redirect()->route('kerjasama.index')
        ->with($notification);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kerjasama::find($id)->delete();

        $notification = array(
            'message' => 'Data telah berhasil dihapus', 
            'alert-type' => 'success'
        );
        return redirect()->route('kerjasama.index')
        ->with($notification);
    }
}
