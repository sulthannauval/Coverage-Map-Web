<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadKMZ extends Model
{
    protected $table = 'upload_kmz';
    protected $primaryKey = 'id_upload';
    public $timestamps = false;

    protected $fillable = [
        'nama_file',
        'path_file',
        'id_admin',
        'tanggal_upload',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}
