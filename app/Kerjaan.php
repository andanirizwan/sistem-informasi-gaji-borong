<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerjaan extends Model
{
    protected $table = 'kerjaan';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
