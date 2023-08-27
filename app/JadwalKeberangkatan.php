<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class JadwalKeberangkatan extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    //
    protected $fillable = [
        'id_jadwal', 'jadwal', 'start', 'stop', 'status', 'harga', 'id_armada', 'id_nahkoda', 'id_kapal', 'id_rute', 'ekstra'
    ];

    public function jadwalToArmada()
    {
        return $this->belongsTo('App\Armada', 'id_armada', 'id_armada');
    }

    public function jadwalToNahkoda()
    {
        return $this->belongsTo('App\Nahkoda', 'id_nahkoda', 'id_nahkoda');
    }

    public function jadwalToKapal()
    {
        return $this->belongsTo('App\Kapal', 'id_kapal', 'id_kapal');
    }

    public function jadwalToRute()
    {
        return $this->belongsTo('App\Rute', 'id_rute', 'id_rute')
            ->with('tujuan_awals')
            ->with('tujuan_akhirs');
    }

    public function jadwalToPenumpang()
    {
        //->whereDate('tanggal_keberangkatan', Carbon::now('+08:00'))
        return $this->belongsToMany(
            Penumpang::class,
            'keberangkatans',
            'id_jadwal',
            'id_penumpang',
            'id_jadwal'
        );
    }

    public function jadwalToTiket()
    {
        return $this->hasMany('App\Tiket', 'id_jadwal', 'id_jadwal');
    }

    public function history() {
        return $this->belongsTo(DB::table('history_keberangkatan'), 'id_jadwal', 'id_jadwal');
    }
    
    public function jadwalToLoket()
    {
        return $this->belongsTo('App\Loket', 'id_loket', 'id_loket');
    }
}
