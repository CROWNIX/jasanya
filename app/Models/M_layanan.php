<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $fillabel = ['nama','deskripsi','foto'];
}
