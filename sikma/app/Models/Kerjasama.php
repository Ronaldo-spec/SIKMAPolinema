<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    use HasFactory;

    protected $table = "kerjasama";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'mitra',
        'tgl_mulai',
        'tgl_akhir',
        'kualifikasi_id',
        'jenismitra_id',
        'bentuk_kerjasama',
        'telepon',
        'email',
    ];

    public function kualifikasi(){
      return $this->belongsTo(Kualifikasi::class);
    }
    public function jenismitra(){
      return $this->belongsTo(JenisMitra::class);
    }
}
