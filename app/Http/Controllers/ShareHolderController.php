<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShareHolder;

class ShareHolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shareholders=ShareHolder::all();
        
        return view('shareholders.index',compact('shareholders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shareholders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ShareHolder::create($request->all());
        return response()->json(array('status'=>true,'message'=>'Successfully Created Shareholder!'),200);
    }                                                                                                                                                                                                                        

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd("hee");
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
}
