<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = 
    [
        'Name',
        'Owner_Name',
        'Owner_Username',
        'Team',
        'Creator_Name',
        'Creator_Username',
        'Website',
        'Phone_Number',
        'Address',
        'City',
        'Province',
        'Country',
        'Zipcode',
        'Type',
        'Employees_Number',
        'Source',
        'Annual_Revenue',
        'Deal',
        'Contact',
        'Industry',
        'Bussiness_Registration_Number',
        'Parent_Company',
        'Created_At_Date',
        'Created_At_Time',
        'Updated_At',
        'Nama_Dirut',
        'Latest_Note1',
        'Latest_Note2',
        'Latest_Note3'
    ];

    public $timestamps = false;
}
