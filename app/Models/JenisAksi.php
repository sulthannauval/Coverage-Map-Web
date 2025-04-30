<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAksi extends Model
{
    protected $table = 'jenis_aksi';
    protected $primaryKey = 'id_aksi';
    public $timestamps = false;
}
