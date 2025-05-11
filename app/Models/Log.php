<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log';
    protected $primaryKey = 'id_log';
    public $timestamps = false;

    protected $fillable = [
        'id_admin',
        'id_aksi',
        'id_pemancar',
        'id_upload',
        'deskripsi_aksi',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }

    public function aksi()
    {
        return $this->belongsTo(JenisAksi::class, 'id_aksi');
    }

    public function pemancar()
    {
        return $this->belongsTo(DataPemancar::class, 'id_pemancar');
    }

    public function upload()
    {
        return $this->belongsTo(UploadKMZ::class, 'id_upload');
    }
}