<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProvinsi extends Model
{
    protected $table = 'provinsi';
    protected $primaryKey = 'id_prov';
    protected $fillable = [
        'nama_prov',
    ];
}
