<?php

namespace App\Http\Controllers;

use App\Models\Accounting;
use App\Models\From;
use App\Models\Payment;
use Illuminate\Http\Request;

class HesabController extends Controller
{
    
    public function index()
    {
        $show=Accounting::all()->sortByDesc('id');
        $from=From::all()->sortByDesc('id');
        return view('pages.income',compact("show","from"));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'Name'=>'Required',
                'Mobile'=>'Required',
			'Price'=> 'required ',
            'Insurance'=> 'required ',
            

              
        ]);
        Accounting::query()->create([
            'Name'=> $request->Name,
            'Mobile'=> $request->Mobile,
		    'Price'=> $request->Price,

            'Description'=> $request->Description,
            'Insurance'=> $request->Insurance,
		    'From'=> $request->From,

            'Payment'=> $request->Payment,
            'Date'=> $request->Date,
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







    public function costshow()
    {
        $show=Payment::all()->sortByDesc('id');
        $from=Payment::all()->sortByDesc('id');
        return view('pages.Cost',compact("show","from"));
    }






    public function coststore(Request $request)
    {
        $request->validate([
            'title'=>'Required',
                'time'=>'Required',
			'discription'=> 'required ',
           
            

              
        ]);
        Payment::query()->create([
            'title'=> $request->title,
            'type'=> $request->type,
		    'time'=> $request->time,
            'price'=> $request->price,
            'discription'=> $request->discription,
            'date'=> $request->date,
		  
            
         
        ]);
        return redirect()->back()->with('success','سند حسابداری با موفقیت ثبت شد.');

    }



}
