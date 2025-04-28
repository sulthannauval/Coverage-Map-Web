<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'data_admin';    // Nama tabel
    protected $primaryKey = 'id_admin';  // Primary key
    public $timestamps = false;          // Karena tabel tidak pakai created_at/updated_at
    protected $fillable = ['nama', 'username', 'email', 'password', 'tanggal_pembuatan'];

    protected $hidden = ['password'];    // Hide password saat akses data
}
