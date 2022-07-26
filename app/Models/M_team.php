<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_team extends Model
{
    use HasFactory;
    protected $table = 'team';
    // protected $primaryKey = 'id';
    protected $fillable = [
        'nama_lengkap', 'jobdesk', 'foto', 'instagram', 'github', 'linkedin', 'facebook'
    ];
}
