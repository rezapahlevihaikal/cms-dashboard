<?php

namespace App\Imports;

use App\Models\Deals;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DealsImport implements ToCollection, WithHeadingRow
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
            
            Deals::create([
                'Name' => $value['name'],
                'Team' => $value['team'],
                'Owner_Fullname' => $value['owner_fullname'],
                'Owner_Username' => $value['owner_username'],
                'Creator_Fullname' => $value['creator_fullname'],
                'Creator_Username' => $value['creator_username'],
                'Currency' => $value['currency'],
                'Size' => $value['size'],
                'Cost' => $value['cost'],
                'Closed_Date' => $value['closed_date'],
                'Start_Date' => $value['start_date'],
                'Expired_Date' => $value['expired_date'],
                'Pipeline' => $value['pipeline'],
                'Stage' => $value['stage'],
                'Source' => $value['source'],
                'Priority' => $value['priority'],
                'Company' => $value['company'],
                'Contacts' => $value['contacts'],
                'Contacts_Email' => $value['contacts_email'],
                'Contacts_Phone' => $value['contacts_phone'],
                'Products' => $value['products'],
                'Lost_Reason' => $value['lost_reason'],
                'Deal_Status' => $value['deal_status'],
                'Created_At_Date' => $value['created_at_date'],
                'Created_At_Time' => $value['created_at_time'],
                'Updated_At' => $value['updated_at'],
                'Competitor_Product' => $value['competitor_product'],
                'Related_Outlet' => $value['related_outlet'],
                'Penerima_Award' => $value['penerima_award'],
                'Latest_Note_1' => $value['latest_note_1'],
                'Latest_Gps_Checkin_1' => $value['latest_gps_checkin_1'],
                'Latest_Note_2' => $value['latest_note_2'],
                'Latest_Gps_Checkin_2' => $value['latest_gps_checkin_2'],
                'Latest_Note_3' => $value['latest_note_3'],
                'Latest_Gps_Checkin_3' => $value['latest_gps_checkin_3'],
            ]);
        }
    }
}
