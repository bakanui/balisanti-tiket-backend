<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kapal extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    //
    protected $fillable = [
        'id_kapal', 'nama_kapal', 'mesin', 'panjang', 'lebar', 'dimension', 'kapasitas_penumpang', 'kapasitas_crew', 'id_armada', 'id_jenis', 'id_status', 'kilometer', 'image'
    ];

    public function kapalToArmada()
    {
        return $this->belongsTo('App\Armada', 'id_armada', 'id_armada');
    }

    public function kapalToJenis()
    {
        return $this->hasOne('App\JenisKapal', 'id_jenis', 'id_jenis');
    }

    public function kapalToStatus()
    {
        return $this->hasOne('App\StatusKapal', 'id_status', 'id_status');
    }
}
