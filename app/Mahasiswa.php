<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa_72190333";
    protected $fillable = ['nim','nama','gender','jurusan','bahasa'];
}
