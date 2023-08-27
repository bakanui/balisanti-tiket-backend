<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loket extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    //
    protected $fillable = [
        'id_loket', 'nama_loket', 'lokasi_loket', 'id_armada'
    ];
    
    public function loketToUser()
    {
        return $this->hasOne('App\User', 'id', 'id_loket');
    }
}
