<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "dosen_72190333";
    protected $fillable = ['nidn','nama','gender','kota','bahasa'];
}
