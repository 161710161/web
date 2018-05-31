<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    
    protected $fillable = ['judul','fasilitas_id'];
    public $timestamps = true;

    public function fasilitas(){
        return $this->belongTo('App\fasilitas','fasilitas_id');
    }
}
