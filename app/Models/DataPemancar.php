<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemancar extends Model
{
    protected $table = 'data_pemancar';

    protected $primaryKey = 'id_pemancar';

    public $timestamps = false;

    protected $fillable = [
        'nama_pemancar',
        'provinsi',
        'latitude',
        'longitude',
        'pembaruan_terakhir',
    ];

    // Contoh relasi ke log
    /* public function logs()
    {
        return $this->hasMany(Log::class, 'id_pemancar');
    } */
}
