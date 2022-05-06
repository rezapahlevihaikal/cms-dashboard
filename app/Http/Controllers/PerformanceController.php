<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Performances;
use Carbon\Carbon;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $dataPerformance = DB::table('performance')
            ->select('*')
            ->get();
            return view('performance.index', compact('dataPerformance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check())
        {
            return view('performance.addPerformance');
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
            $request->validate([
                'divisi'=>'required',
                'core_bisnis'=>'required',
                'target' => 'required',
                'pencapaian'=>'required',
                'value' => 'required',
                'bulan'=>'required',
                'tahun'=>'required',
            ]);
    
                $performance = new Performances();
                $performance->divisi = $request->divisi;
                $performance->core_bisnis = $request->core_bisnis;
                $performance->target = $request->target;
                $performance->pencapaian = $request->pencapaian;
                $performance->value = $request->value;
                $performance->bulan = $request->bulan;
                $performance->tahun = $request->tahun;
                $performance->save();
                return redirect('performance')->with('success');
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
        //
        if(Auth::check())
        {
            $dataPerformance = Performances::findOrFail($id);
            return view('performance.edit', compact('dataPerformance'));
        }
        else
        {
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
        //
        if(Auth::check())
        {
            $dataPerformance = Performances::findOrfail($id);
            $dataPerformance->update([
                'divisi' => $request->divisi,
                'core_bisnis' => $request->core_bisnis,
                'target' => $request->target,
                'pencapaian' => $request->pencapaian,
                'value' => $request->value,
                'bulan' => $request->bulan,
                'tahun' => $request->tahun
            ]);

            if($dataPerformance){
                return redirect('performance')->with('success','Data Berhasil Diupdate');
            }
            else{
                return redirect()->route('performance.index')->with('error','Data Gagal Diinput');
            }
        }
        else
        {
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
        //
        if(Auth::check())
        {
            $dataPerformance = Performances::findOrFail($id);
            $dataPerformance->delete();

            return redirect()->back()->with('status','Success Deleted');
        }
        else{
            return redirect("login")->withSuccess('You are not allowed to access');
        }
    }
}
