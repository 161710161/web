<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $fillable = ['judul','ket'];
    public $timestamps = true;

    public function galleries(){
        return $this->hasMany('App\galleries','fasilitas_id');
    }
}
