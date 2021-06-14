<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileKomunitas extends Model
{
    protected $table = 'profile_kom';
    protected $primaryKey = 'id_kom';
    protected $fillable = [
        'nama_kom', 'id_prov', 'id_kota', 'th_berdiri', 'jml_anggota', 'no_wa', 'instagram', 'desc_kom', 'logo_kom',
    ];
}
