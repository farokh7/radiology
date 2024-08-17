<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Logincontrroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       // $from=From::all()->sortByDesc('id');
        return view('pages.login');
    }

    public function logout()
    {
        
       auth()->logout();
       return view('pages.login');
    }

    public function checkuser(Request $request)
    {
        $request->validate([
            
            'user'=>'Required',
            'password'=>'Required',
                            
        ]);
        $user=User::query()->where('user',$request->user)->firstorfail();
        if($request->password==$user->password)
        {
            auth()->login($user);
            return redirect()->route('income');
        }else{
            return view('pages.login');
        }


     
    }
    public function hellp()
    {
        return view('pages.hellp');
    }
    public function regeditshow()
    {
        $show=User::all()->sortByDesc('id');
        return view('pages.regedit',compact("show"));
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
            'user'=>'Required',
            'password'=>'Required',
               
            

              
        ]);
        $user=User::query()->create([
            'name'=> $request->name,
            'mobile'=> $request->mobile,
		    'address'=> $request->address,
            'user'=> $request->user,
            'password'=> $request->password,
            'isadmin'=> $request->isadmin,
		   
		    
		
         
        ]);
        auth()->login($user);
        return redirect()->back()->with('success','کاربر با موفقیت ثبت شد.');
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
