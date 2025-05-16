<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $primaryKey = 'id_feedback';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'komentar',
    ];
}
