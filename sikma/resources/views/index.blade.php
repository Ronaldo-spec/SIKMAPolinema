@extends('layouts.master')
@section('title','Sistem Informasi Kerjasama Polinema')
@section('content_header_title','Sistem Informasi Kerjasama Polinema')
@section('st0', 'active')
@section('content')
<section class="content">
  @if(Auth::user())
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-info"><i class="fas fa-hands-helping"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Kerjasama</span>
            <span class="info-box-number">{{$kerjasama}}</span>
          </div>
        </div>
      </div>      
      @if(Auth::user()->getRoleNames() == '["Admin"]')
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-success"><i class="far fa-user"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">User</span>
            <span class="info-box-number">{{$user}}</span>
          </div>
        </div>
      </div>
      @endif
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-warning"><i class="far fa-flag"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Dalam Negeri</span>
            <span class="info-box-number">{{$dn}}</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-danger"><i class="fas fa-globe-asia"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Luar Negeri</span>
            <span class="info-box-number">{{$ln}}</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-teal"><i class="fas fa-university"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Perguruan Tinggi</span>
            <span class="info-box-number">{{$tp}}</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-orange"><i class="fas fa-industry"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Industri</span>
            <span class="info-box-number">{{$industri}}</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-pink"><i class="fas fa-building"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Lembaga</span>
            <span class="info-box-number">{{$lembaga}}</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-purple"><i class="fas fa-landmark"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Pemerintah</span>
            <span class="info-box-number">{{$pemerintah}}</span>
          </div>
        </div>
      </div>
    </div>
    @else

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Kerjasama</h3>
      </div>
      <div class="card-body" style="text-align='justify' text-justify: inter-word;">
       <p>Politeknik Negeri Malang sebagai salah satu institusi pendidikan tinggi yang terkemuka di Indonesia senantiasa berusaha untuk terus bergerak ke arah perbaikan dan kemajuan, dalam rangka mengimplementasikan karakter pendidikan tinggi vokasi dalam diri Polinema. Salah satu karakter pendidikan tinggi vokasi yaitu mengutamakan keunggulan profesionalisme, keahlian, kedisiplinan dan link and match dengan mitra kerja atau mitra usaha.</p>

       <p>Menghasilkan bentuk kerjasama dengan berbagai pihak, baik dalam maupun luar negeri yang saling menguntungkan merupakan salah satu tujuan dalam mewujudkan visi Politeknik Negeri Malang sebagai perguruan tinggi vokasi yang unggul. Oleh karena itu, dengan potensi yang dimiliki seperti sumberdaya manusia, sarana dan prasarana, Politeknik Negeri Malang membuka peluang kerjasama dengan semua pihak di berbagai bidang. Selama ini Politeknik Negeri Malang telah banyak berperan dalam berbagai kegiatan kerjasama, seperti: pelatihan dan sertifikasi bidang keahlian termasuk uji kompetensi; layanan produksi dan layanan jasa termasuk konsultansi dan pengiriman tenaga ahli. Dan telah banyak institusi perusahaan baik perusahaan negara maupun swasta yang hingga saat ini secara sinergis menjalin kerjasama dengan Polinema.</p>
     </div>
   </div>
   @endif
 </section>
 @endsection