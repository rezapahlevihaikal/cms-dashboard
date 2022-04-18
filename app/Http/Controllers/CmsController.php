<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\Events;
use App\Models\WebRanks;
use Illuminate\Support\Facades\Auth;

class CmsController extends Controller
{

    public function index()
    {
        if(Auth::check())
        {
            $dataCms = DB::table('web_rank')
            ->select('*')
            ->get();
            return view('cms.cms', compact('dataCms'));
        }
        else
        {
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function create()
    {
        if(Auth::check())
        {
           return view('cms.addData');
        }
        else
        {
            return redirect("login")->withSuccess('You are not allowed to access');
        }
        
    }

    public function store(Request $request)
    {
        if(Auth::check()){
            $validator = WebRanks::create([
                'tanggal' => $request->tanggal,
                'we'=>$request->we,
                'hs'=>$request->hs,
                'populis'=>$request->populis,
                'topcore'=>$request->topcore,
                'lastupdate'=>Carbon::now(),
                'we_tv'=>$request->we_tv,
                'we_nilai'=>$request->we_nilai,
                'hs_nilai'=>$request->hs_nilai,
                'populis_nilai'=>$request->populis_nilai,
                'tc_nilai'=>$request->tc_nilai,
                'tv_nilai'=>$request->tv_nilai
            ]);
    
    
            if($validator){
                return redirect('cms')->with('success','Data Berhasil Diinput');
            }
            else{
                return redirect()->route('cms.cms')->with('error','Data Gagal Diinput');
            }
        }
        else
        {
            return redirect("login")->withSuccess('You are not allowed to access');
        }

    }

    public function edit($id)
    {
        if (Auth::check()) {
            $dataCms = WebRanks::findOrFail($id);
            return view('cms.edit', compact('dataCms'));   
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function update(Request $request, $id)
    {
        if(Auth::check())
        {
            $dataCms = WebRanks::findOrFail($id);
            $dataCms->update([
                'tanggal' => $request->tanggal,
                'we'=>$request->we,
                'hs'=>$request->hs,
                'populis'=>$request->populis,
                'topcore'=>$request->topcore,
                'lastupdate'=>Carbon::now(),
                'we_tv'=>$request->we_tv,
                'we_nilai'=>$request->we_nilai,
                'hs_nilai'=>$request->hs_nilai,
                'populis_nilai'=>$request->populis_nilai,
                'tc_nilai'=>$request->tc_nilai,
                'tv_nilai'=>$request->tv_nilai
            ]);

            if($dataCms){
                return redirect('cms')->with('success','Data Berhasil Diupdate');
            }
            else{
                return redirect()->route('cms.cms')->with('error','Data Gagal Diinput');
            }
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    public function destroy($id)
    {
        if(Auth::check())
        {
            $dataCms = WebRanks::findOrFail($id);
            $dataCms->delete();

            return redirect()->back()->with('status','Success Deleted');
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }
}
