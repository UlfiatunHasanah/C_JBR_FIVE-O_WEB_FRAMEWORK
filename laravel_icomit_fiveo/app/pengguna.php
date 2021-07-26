<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table='penggunas';
    protected $fillable = ['nama', 'password', 'email','coname','prov','kab','nohp','nowa','ins','you','fkeg','deskripsi','logo'];

    public function getRouteKeyName()
    {
    	return 'nama';
    }
 }
