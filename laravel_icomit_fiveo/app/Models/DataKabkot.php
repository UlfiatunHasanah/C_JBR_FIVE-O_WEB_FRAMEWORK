<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKabkot extends Model
{
    protected $table = 'kab_kota';
    protected $primaryKey = 'id_kabkot';
    protected $foreignKey = 'id_prov';
    protected $fillable = [
        'nama_kab_kota', 'nama_prov',
    ];
}
