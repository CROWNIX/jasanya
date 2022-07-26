<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_project extends Model
{
    use HasFactory;
    protected $table ='project';
    protected $fillable=[
        'nama','deskripsi','jenis','deadline','status','time_completed','foto_completed','pekerja','foto_transaksi','keterangan'
    ];
    
}
