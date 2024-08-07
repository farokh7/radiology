<?php

namespace App\Http\Controllers;

use App\Models\Accounting;
use App\Models\From;
use App\Models\hoghogh;
use Illuminate\Http\Request;

class HoghoghController extends Controller
{
    
    public function index()
    {
        $show=hoghogh::all()->sortByDesc('id');
       
        return view('pages.salary',compact("show"));
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
            'Name'=>'Required',
               
            

              
        ]);
        hoghogh::query()->create([
            'Name'=> $request->Name,
            'Hour'=> $request->Hour,
		    'PayForHour'=> $request->PayForHour,

            'Price'=> intval (str_replace(",","",$request->PayForHour))*intval(str_replace(",","",$request->Hour)),
            'Moon'=> $request->Moon,
		    'Year'=> $request->Year,

            
            'OverPay'=> $request->OverPay,
            'discription'=> $request->discription,
            'Business'=> $request->Business,
		    
		
         
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

    public function delete($id)
    {

        hoghogh::find($id)->delete();

        return redirect()->back()->with('success','سند  با موفقیت حذف شد.');

    }
}
