<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
protected $table ='mahasiswa';
protected $fillable = ['id','nama','nim','alamat'];
    //
}
