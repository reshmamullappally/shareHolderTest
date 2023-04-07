<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShareHolder;
use App\Models\Share;
use App\Models\ShareInstallment;
use Carbon\Carbon;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $shareholders=ShareHolder::all();
        return view('shares.create',compact('shareholders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $share_id=Share::create($request->all());
        dd($share_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function loadShareAmountDetails(Request $request)
    {
        
        $shareholder=$request->shareholder;
        $duration=$request->duration;
        $total_amount=$request->total_amount;
        $installation_type=$request->installation_type;
        $start_date=$request->start_date;
        $install_dates=array();
        $install_amount=0;
        if($installation_type=="4")//custom
        {

        }
        else
        {
            
            $from_date=Carbon::parse($start_date);
            if($installation_type=="1")//monthly
            $no_months=$duration*12;
            else if($installation_type=="2")
            $no_months=$duration*4;
            else if($installation_type=="3")
            $no_months=1;
            $install_amount=$total_amount/$no_months;
            if($install_amount>0)
            {
                array_push($install_dates,Carbon::parse($start_date)->format('d-m-Y'));
                for($i=1;$i<$no_months;$i++)
                {   if($installation_type=="1")
                    $new_date=$from_date->addMonth(1);
                    else if($installation_type=="2")
                    $new_date=$from_date->addMonth(1);
                    array_push($install_dates,Carbon::parse($new_date)->format('d-m-Y'));
                }
            }
            else
            {
                //invalid entry
            } 
           
            
        }
        return view('shares.share_amount_details',compact('installation_type','install_dates','install_amount','total_amount','duration'));
        //->with(['technicianDetail'=>$technicianDetail]);
    }
    public function sharesPayment(Request $request)
    {
        return view('shares.share_payment');
    }
    
}
