<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_kritikSaran extends Model
{
    use HasFactory;

    protected $table = 'kritik_saran';
    // protected $primaryKey = 'id';
    protected $fillabel = ['name','email','subject','message'];
}
