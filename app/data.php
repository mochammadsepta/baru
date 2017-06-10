<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table = 'data';
    protected $fillable = ['nama','kelas','jurusan','jk'];
    protected $visible = ['nama','kelas','jurusan','jk'];
    public $timestamps = true;
}