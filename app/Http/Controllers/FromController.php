<?php

namespace App\Http\Controllers;

use App\Models\Accounting;
use App\Models\From;
use Illuminate\Http\Request;

class FromController extends Controller
{
   
    public function index()
    {
        $show=From::all()->sortByDesc('id');
        return view('pages.From',compact("show"));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'Name'=>'Required',
                'Mobile'=>'Required',
			
            'Information'=> 'required ',
            

              
        ]);
            From::query()->create([
            'Name'=> $request->Name,
            'Mobile'=> $request->Mobile,
		    'Information'=> $request->Information,

            'Adrress'=> $request->Adrress,
         
            
		
         
        ]);
       return redirect()->back()->with('success','موسسه با موفقیت ثبت شد.');
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
