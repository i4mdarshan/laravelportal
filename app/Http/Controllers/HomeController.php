<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\intern_detail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $InternData = intern_detail::all()->where('status',0);
        $InternAcc = intern_detail::all()->where('status',1);
        return view('home',['interns'=>$InternData,'internsacc'=>$InternAcc ]);
    }

    public function detail($id)
    {
        $InternData = intern_detail::find($id);
        return view('detail',compact('InternData','id'));
    }

    public function reject($id)
    {
        $InternData = intern_detail::find($id);
        $InternData->status =1;
        $InternData->save();
        return redirect()->action([HomeController::class, 'index']);
    }


    public function AddDetail(Request $request,$id){
        $appoint = intern_detail::find($id);
        $appoint->a_date = $request->input('a_date');
        $appoint->a_time = $request->input('a_time');
        $appoint->save();
        return redirect()->action([HomeController::class, 'index']);
    }
    
}
