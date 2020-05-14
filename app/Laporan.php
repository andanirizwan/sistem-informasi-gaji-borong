<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function absensi()
    {
        return $this->belongsTo('App\Absensi', 'absensi_id', 'id');
    }

    public function kerjaan()
    {
        return $this->belongsTo('App\laporan', 'kerjaan_id', 'id');
    }

}
