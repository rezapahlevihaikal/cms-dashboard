<?php

namespace App\Imports;

use App\Models\Companies;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CompaniesImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function Collection(Collection $rows)
    {
        foreach ($rows as $value) 
        {
            
            Companies::create([
                'Name' => $value['name'],
                'Owner_Name' => $value['owner_name'],
                'Owner_Username' => $value['owner_username'],
                'Team' => $value['team'],
                'Creator_Name' => $value['creator_name'],
                'Creator_Username' => $value['creator_username'],
                'Website' => $value['website'],
                'Phone_number' => $value['phone_number'],
                'Address' => $value['address'],
                'City' => $value['city'],
                'Province' => $value['province'],
                'Country' => $value['country'],
                'Zipcode' => $value['zipcode'],
                'Type' => $value['type'],
                'Employees_Number' => $value['employees_number'],
                'Source' => $value['source'],
                'Annual_Revenue' => $value['annual_revenue'],
                'Deal' => $value['deal'],
                'Contact' => $value['contact'],
                'Industry' => $value['industry'],
                'Business_Registration_Number' => $value['business_registration_number'],
                'Parent_Company' => $value['parent_company'],
                'Created_At_Date' => $value['created_at_date'],
                'Created_At_Time' => $value['created_at_time'],
                'Updated_At' => $value['updated_at'],
                'Nama_Dirut' => $value['nama_dirut'],
                'Latest_Note_1' => $value['latest_note_1'],
                'Latest_Note_2' => $value['latest_note_2'],
                'Latest_Note_3' => $value['latest_note_3'],
            ]);
        }
    }
}
