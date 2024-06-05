<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kantor_polisi extends Model
{
    protected $table = 'kantor_polisi';
    use HasFactory;

    protected $fillable = [
        'kantorpolisi',
        'alamat',
        'jamoperasional',
        'nohp',
        'latitude',
        'longitude',
    ];
}
