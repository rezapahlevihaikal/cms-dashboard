<?php

namespace App\Imports;

use App\Models\Contacts;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ContactsImport implements ToCollection, WithHeadingRow
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
            Contacts::create([
                'First_Name' => $value['first_name'],
                'Last_Name' => $value['last_name'],
                'Owner_Name' => $value['owner_name'],
                'Owner_Username' => $value['owner_username'],
                'Team' => $value['team'],
                'Creator_Name' => $value['creator_name'],
                'Creator_Username' => $value['creator_username'],
                'Job_Title' => $value['job_title'],
                'Contact_Email' => $value['contact_email'],
                'Phone_Number' => $value['phone_number'],
                'Status' => $value['status'],
                'Address' => $value['address'],
                'City' => $value['city'],
                'Province' => $value['province'],
                'Country' => $value['country'],
                'Zipcode' => $value['zipcode'],
                'Date_Of_Birth' => $value['date_of_birth'],
                'Source' => $value['source'],
                'Sex' => $value['sex'],
                'Avg_Annual_Income' => $value['avg_annual_income'],
                'Company_Name' => $value['company_name'],
                'Company_Website' => $value['company_website'],
                'Deal' => $value['deal'],
                'Created_At_Date' => $value['created_at_date'],
                'Created_At_Time' => $value['created_at_time'],
                'Updated_At' => $value['updated_at'],
                'Customer' => $value['customer'],
            ]);
        }
    }
}
