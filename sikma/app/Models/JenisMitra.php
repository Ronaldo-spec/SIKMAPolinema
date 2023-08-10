<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisMitra extends Model
{
    use HasFactory;
    protected $table='jenis_mitra';

    public function kerjasama(){
      return $this->hasMany(Kerjasama::class);
    }
}
