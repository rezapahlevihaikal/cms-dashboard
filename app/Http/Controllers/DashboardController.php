<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(Auth::check()){
            $wartaEkonomi = DB::table('web_rank')
                            ->select('tanggal', 'we')
                            ->get();

            foreach ($wartaEkonomi as $key) {
                    $tanggalWe[] = date('d-M', strtotime($key->tanggal));
                    $rankWe[] = $key->we;
            }


            $herStory = DB::table('web_rank')
                        ->select('tanggal', 'hs')
                        ->get();

            foreach ($herStory as $key) {
                # code...
                $tanggalHs[] = date('d-M', strtotime($key->tanggal));
                $rankHs[] = $key->hs;
            }


            $populis = DB::table('web_rank')
                        ->select('tanggal', 'populis')
                        ->get();

            foreach ($populis as $key) {
                # code...
                $tanggalPop[] = date('d-M', strtotime($key->tanggal));
                $rankPop[] = $key->populis;
            }

            $topRanks = DB::table('web_rank')
                        ->select('we', 'hs', 'populis', 'tanggal')
                        ->orderBy('tanggal','desc')
                        ->first();

            return view('dashboard.dashboard', compact('wartaEkonomi','herStory','populis','topRanks'))
            ->with('tanggalWe',json_encode($tanggalWe))
            ->with('rankWe',json_encode($rankWe,JSON_NUMERIC_CHECK))
            ->with('tanggalHs',json_encode($tanggalHs))
            ->with('rankHs',json_encode($rankHs,JSON_NUMERIC_CHECK))
            ->with('tanggalPop',json_encode($tanggalHs))
            ->with('rankPop',json_encode($rankPop,JSON_NUMERIC_CHECK));
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }
}
