<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\Deals;
use App\Models\DealsAdd;
use App\Imports\DealsImport;
use Maatwebsite\Excel\Facades\Excel;

class DealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataDeals = DB::table('deals')
        ->select('*')
        ->get();
        return view('deals.index', compact('dataDeals'));
    }

    public function importDealsXls(Request $request)
    {
        Excel::import(new DealsImport, $request->fileDeals);

        return redirect()->back()->with('success', 'All good!');
    }

    public function indexDealsAdd()
    {
        $dataDealsAdd = DB::table('deals_add')
        ->select('*')
        ->get();
        return view('dealsAdd.index', compact('dataDealsAdd'));
    }

    public function storeDealsAdd(Request $request)
    {
        $validator = DealsAdd::create([
            'name' => $request->name,
            'size' => $request->size,
            'tanggal' => $request->tanggal
        ]);

        if($validator)
        {
            return redirect('deals')->with('success','Data Berhasil ditambah');
        }
        else
        {
            return redirect()->route('dealsAdd.index')->with('error','Data Gagal Diinput');
        }
    }
}
