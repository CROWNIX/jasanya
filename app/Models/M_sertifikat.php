<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_sertifikat extends Model
{
    use HasFactory;

    protected $table = 'tb_sertifikat';
    protected $primaryKey = 'id';
    protected $fillabel = ['fileName'];
}
