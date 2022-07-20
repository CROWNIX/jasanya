<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_portfolio extends Model
{
    use HasFactory;

    protected $table = 'tb_portfolio';
    protected $primaryKey = 'id';
    protected $fillabel = ['nama_lengkap', 'jobdesk', 'deskripsi', 'foto', 'instagram', 'github', 'linkedin', 'facebook', 'prefix'];

    public function sertifikat()
    {
        return $this->hasMany(M_portfolio::class, 'idPortfolio', 'id');
    }
}
