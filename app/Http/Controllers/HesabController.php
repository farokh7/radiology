<?php

namespace App\Http\Controllers;

use App\Models\Accounting;
use Illuminate\Http\Request;

class HesabController extends Controller
{
    
    public function index()
    {
        $show=Accounting::all()->sortByDesc('id');
        return view('pages.income',compact("show"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'Required',
                'mobile'=>'Required',
			'price'=> 'required ',
            'Insurance'=> 'required ',
            

              
        ]);
        Accounting::query()->create([
            'name'=> $request->name,
            'mobile'=> $request->mobile,
		    'price'=> $request->price,

            'Description'=> $request->Description,
            'Insurance'=> $request->Insurance,
		    'From'=> $request->From,

            'Payment'=> $request->Payment,
            'date'=> $request->date,
		    'Day'=> $request->Day,
            'WeekDay'=> $request->WeekDay,
            'Moon'=> $request->Moon,
		    'Year'=> $request->Year,
            'UserId'=>$request->UserId,
		
         
        ]);
        return redirect()->back()->with('success','سند حسابداری با موفقیت ثبت شد.');

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
