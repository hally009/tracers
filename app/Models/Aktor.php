<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Aktor extends Authenticatable
{
    // Tentukan nama tabel jika tidak mengikuti konvensi penamaan default
    protected $table = 'aktors';

    // Definisikan kolom yang dapat diisi (fillable)
    protected $fillable = ['status_pengguna', 'kata_pengguna', 'kata_sandi'];
}
