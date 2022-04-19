<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealsAdd extends Model
{
    use HasFactory;

    protected $table = 'deals_add';

    protected $fillable = 
    [
        'name',
        'size',
        'tanggal'
    ];

    public $timestamps = false;
}
