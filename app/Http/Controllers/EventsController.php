<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CalEvents;
use DB;
use Carbon\Carbon;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::check())
        {
            $dataEvents = DB::table('cal_event')
            ->select('*')
            ->get();
            return view('events.index', compact('dataEvents'));
        }
        else
        {
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::check())
        {
            return view ('events.addData');
        }
        else
        {
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Auth::check())
        {
            $validator = CalEvents::create([
                'tanggal' => $request->tanggal,
                'start_time' => $request->start_time,
                'finish_time' => $request->finish_time,
                'venue' => $request->venue,
                'deskripsi' => $request->deskripsi,
                'kategori' => $request->kategori,
                'pic' => $request->pic,
                'lastupdate' => Carbon::now(),
                'status' => $request->status
            ]);

            if($validator)
            {
                return redirect('events')->with('success','Data Berhasil ditambah');
            }
            else
            {
                return redirect()->route('events.index')->with('error','Data Gagal Diinput');
            }
        }
        else
        {
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()){
            $dataEvents = CalEvents::findOrFail($id);
            return view('events.edit', compact('dataEvents'));   
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::check())
        {
            $dataEvents = CalEvents::findOrFail($id);
            $dataEvents->update([
                'tanggal' => $request->tanggal,
                'start_time' => $request->start_time,
                'finish_time' => $request->finish_time,
                'venue' => $request->venue,
                'deskripsi' => $request->deskripsi,
                'kategori' => $request->kategori,
                'pic' => $request->pic,
                'lastupdate' => Carbon::now(),
                'status' => $request->status
            ]);

            if($dataEvents){
                return redirect('events')->with('success','Data Berhasil Diupdate');
            }
            else{
                return redirect()->route('events.index')->with('error','Data Gagal Diinput');
            }
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check())
        {
            $dataEvents = CalEvents::findOrFail($id);
            $dataEvents->delete();

            return redirect()->back()->with('status','Success Deleted');
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }
}
