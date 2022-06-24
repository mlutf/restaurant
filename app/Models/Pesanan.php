<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = "tb_pesanan";
    protected $fillable = ['kd_pesanan','kd_menu','nama_pelanggan','no_meja','tgl_pesan','keterangan'];
    protected $primaryKey = 'kd_pesanan';
    public function menu(){
        return $this->hasOne(Menu::class,'kd_menu','kd_menu');   
    }
}
