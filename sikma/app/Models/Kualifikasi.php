<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kualifikasi extends Model
{
    use HasFactory;
    protected $table='kualifikasi';

    public function kerjasama(){
      return $this->hasMany(Kerjasama::class);
    }
}
