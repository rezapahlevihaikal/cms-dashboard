<?php

namespace App\Http\Controllers;
use App\Models\User;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        // $year = ['2015','2016','2017','2018','2019','2020'];

        // $user = [];
        // foreach ($year as $key => $value) {
        //     $user[] = User::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
        // }

    	// return view('charts')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));

        $dataTanggal = DB::table('alexa_charts')
                        ->select('tanggal')
                        ->where('nama_web','=','Warta Ekonomi')
                        ->get();
        
        // foreach ($dataTanggal as $key => $value) {
        //     # code...
            
        // }

        dd($dataTanggal);

        return view('charts');
    }
}
