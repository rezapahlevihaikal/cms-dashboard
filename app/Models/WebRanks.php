<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebRanks extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'we', 
        'hs', 
        'populis', 
        'topcore',
        'lastupdate',
        'we_tv', 
        'we_nilai',
        'hs_nilai',
        'populis_nilai',
        'tc_nilai',
        'tv_nilai'
    ];

    public $timestamps = false;
}
