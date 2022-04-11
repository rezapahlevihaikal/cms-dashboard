<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performances extends Model
{
    use HasFactory;

    protected $table = 'performance';

    protected $fillable = 
    [
        'divisi',
        'core_bisnis',
        'pencapaian',
        'bulan',
        'tahun'
    ];

    public $timestamps = false;
}
