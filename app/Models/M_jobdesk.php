<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_jobdesk extends Model
{
    use HasFactory;
    protected $table = 'jobdesk';
    // protected $primaryKey = 'id';
    protected $guarded = ['id'];
}