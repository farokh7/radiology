<?php

namespace App\Http\Controllers;
include 'jdate/jdatetime.class.php'; 
use App\Models\Accounting;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

  
    
   
    public function index()
    {
        $date = new \jDateTime(true, true, 'Asia/Tehran');

        $year = $date->date("Y");
        $moon = $date->date("m");
        $lastmoon = $moon;
        
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $string = $moon;
        $num = range(0, 9);
        $convertedPersianNums = str_replace($persian, $num, $string);
        
        $lastmoon = $convertedPersianNums - 1;
        $lastmoon = floatval($lastmoon);
        
        function fa_number($number)
        {
           if (!is_numeric($number) || empty($number)) return '۰';
           $en = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
           $fa = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
           return str_replace($en, $fa, $number);
        }
        
        $lastmoon1 = fa_number($lastmoon);
        if ($lastmoon < 10) {
            $lastmoon = '۰' . $lastmoon;
        }
        $lastmoon = floatval($lastmoon);
        
        $day = $date->date("j"); 
        
        $thismoon = Accounting::query()->where('year', $year)->where('moon', $moon)->sum('price');
        $lastmoon = Accounting::query()->where('year', $year)->where('moon', $lastmoon)->sum('price');
        $thisday = Accounting::query()->where('year', $year)->where('moon', $moon)->where('day', $day)->sum('price');
        $countthisday = Accounting::query()->where('year', $year)->where('moon', $moon)->where('day', $day)->count('price');
        
        $averageDailyIncome = Accounting::query()
            ->where('year', $year)
            ->where('moon', $moon)
            ->selectRaw('SUM(price) / COUNT(DISTINCT day) AS AverageDailyIncome')
            ->value('AverageDailyIncome');
        
        $distinctDaysCount = Accounting::query()
            ->where('year', $year)
            ->where('moon', $moon)
            ->distinct('day')
            ->count('day');
        
        $countthismoon = Accounting::query()
            ->where('year', $year)
            ->where('moon', $moon)
            ->count('price');
        



            $centers = DB::table('accountings')
            ->select('From', DB::raw('COUNT(*) as total_patients'))
            ->where('year', $year)
            ->where('moon', $moon)
            ->groupBy('From')
            ->orderBy('total_patients', 'desc')
            ->get();


        return view('pages.admin', compact('lastmoon1','countthisday', 'thismoon', 'lastmoon', 'thisday', 'averageDailyIncome', 'distinctDaysCount', 'countthismoon', 'moon','day','centers'));
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

    public function regedit(Request $request)
    {
        $show=User::all()->sortByDesc('id');
        return view('pages.adminregedit',compact($show));
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
