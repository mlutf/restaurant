<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "tb_pegawai";
    protected $fillable = ['kd_pegawai','nama_pegawai','username','password','jk','no_hp','jabatan'];
    protected $primaryKey = 'kd_pegawai';

}
