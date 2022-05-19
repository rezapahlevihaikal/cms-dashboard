<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\InstagramRank;
use App\Models\TiktokRank;
use App\Models\YoutubeRank;
use Carbon\Carbon;

class SocialMediaController extends Controller
{
    public function index()
    {
        //
        $dataYoutube = DB::table('youtube_ranks')
        ->select('*')
        ->get();

        $dataTiktok = DB::table('tiktok_ranks')
        ->select('*')
        ->get();

        $dataInstagram = DB::table('instagram_ranks')
        ->select('*')
        ->get();

        return view('socialMedia.index', compact('dataYoutube','dataTiktok', 'dataInstagram'));
    }

    public function addYoutube()
    {
        return view('youtuberank.store');
    }

    public function storeYoutube(Request $request)
    {
        $validator = YoutubeRank::create([
            'yt_we_rank' => $request->yt_we_rank,
            'yt_hs_rank' => $request->yt_hs_rank,
            'yt_populis_rank' => $request->yt_populis_rank,
            'yt_konten_jatim_rank' => $request->yt_konten_jatim_rank,
            'yt_we_nilai' => $request->yt_we_nilai,
            'yt_hs_nilai' => $request->yt_hs_nilai,
            'yt_populis_nilai' => $request->yt_populis_nilai,
            'yt_konten_jatim_nilai' => $request->yt_konten_jatim_nilai
        ]);
        if($validator)
        {
            return redirect()->route('indexRanks')->with('success','Data Berhasil ditambah');
        }
        else
        {
            return redirect()->route('indexRanks')->with('error','Data Gagal Diinput');
        }
    }

    public function addTiktok()
    {
        return view('tiktokrank.store');
    }

    public function storeTiktok(Request $request)
    {
        $validator = TiktokRank::create([
            'tiktok_we_rank' => $request->tiktok_we_rank,
            'tiktok_hs_rank' => $request->tiktok_hs_rank,
            'tiktok_populis_rank' => $request->tiktok_populis_rank,
            'tiktok_konten_jatim_rank' => $request->tiktok_konten_jatim_rank,
            'tiktok_we_nilai' => $request->tiktok_we_nilai,
            'tiktok_hs_nilai' => $request->tiktok_hs_nilai,
            'tiktok_populis_nilai' => $request->tiktok_populis_nilai,
            'tiktok_konten_jatim_nilai' => $request->tiktok_konten_jatim_nilai
        ]);
        if($validator)
        {
            return redirect()->route('indexRanks')->with('success','Data Berhasil ditambah');
        }
        else
        {
            return redirect()->route('indexRanks')->with('error','Data Gagal Diinput');
        }
    }

    public function addInstagram()
    {
        return view('instagramrank.store');
    }

    public function storeInstagram(Request $request)
    {
        $validator = InstagramRank::create([
            'ig_we_rank' => $request->ig_we_rank,
            'ig_hs_rank' => $request->ig_hs_rank,
            'ig_populis_rank' => $request->ig_populis_rank,
            'ig_konten_jatim_rank' => $request->ig_konten_jatim_rank,
            'ig_we_nilai' => $request->ig_we_nilai,
            'ig_hs_nilai' => $request->ig_hs_nilai,
            'ig_populis_nilai' => $request->ig_populis_nilai,
            'ig_konten_jatim_nilai' => $request->ig_konten_jatim_nilai
        ]);
        if($validator)
        {
            return redirect()->route('indexRanks')->with('success','Data Berhasil ditambah');
        }
        else
        {
            return redirect()->route('indexRanks')->with('error','Data Gagal Diinput');
        }
    }
}
