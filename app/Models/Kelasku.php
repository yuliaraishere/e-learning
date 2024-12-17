<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelasku extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kelas';
    protected $fillable = [
        'id_kelas',
        'nm_kelas',
        'nm_pengajar',        
        'jlm_jp'
    ];
}
