<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
    protected $fillable = ['nama','ket'];
    public $timestamps = true;
}
