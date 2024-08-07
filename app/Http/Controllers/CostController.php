<?php

namespace App\Http\Controllers;



use App\Models\Accounting;
use App\Models\From;
use App\Models\hoghogh;
use App\Models\payment;


use Illuminate\Http\Request;


class CostController extends Controller
{
   
    public function index()
    {
        $show=Payment::all()->sortByDesc('id');
        $from=Payment::all()->sortByDesc('id');
        return view('pages.Cost',compact("show","from"));
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

        payment::find($id)->delete();

        return redirect()->back()->with('success','سند  با موفقیت حذف شد.');

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
