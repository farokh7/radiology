@extends('index')
@section('content')
<div style="border: #343a40 solid 1px; width:90%;margin-right:50px;height: auto;min-height: 400px;padding:20px;border-radius: 10px;">

<style>
    .danger{
        color:red
          }
        table{
            text-align: center;
        }

</style>
<table class="table table-bordered">
    <tr>
        <th>درآمد این ماه تا امروز</th>
        <th>درآمد ماه قبل</th>
        <th>درآمد  امروز    </th>
        <th>تعداد کل مراجعین این ماه</th>
      


    </tr>



    <tr>
        <td>{{number_format($thismoon)}} </td>
        <td>{{number_format($lastmoon)}}  </td>
        <td>  {{$thisday}}  </td>
        <td>{{number_format($countthismoon)}}    </td>
      


    </tr>


    <th>تعداد روزهای کاری در ماه جاری    </th>
        <th>میانگین درامد روزانه</th>
        <th colspan="1"> تعداد بیماران امروز</th>
       
        <th>پیشبینی این ماه</th>


    </tr>

     
        <td>{{number_format($distinctDaysCount)}}    </td>
        <td>{{number_format($averageDailyIncome )}}</td>
        <td>   {{number_format($countthisday)}} </td>
        <td>{{number_format($averageDailyIncome*25)}} </td>


    </tr>
    <tr>

    <th>هزینه های ماه قبل    </th>
        <th>حقوق های ماه قبل</th>
        <th>جمع مبالغ پرداختی </th>
        <th>سود ماه قبل</th>


    </tr>

     
        <td>{{number_format(0)}}    </td>
        <td>{{number_format(0)}}</td>
        <td>   {{number_format(0)}} </td>
        <td>{{number_format(0)}} </td>


    </tr>


    <tr>

<th>   میانگین بیماران در روز  </th>
    <th> </th>
    <th> </th>
    <th></th>


</tr>

 
<td>{{ number_format(floatval($countthismoon) / floatval($distinctDaysCount)) }}</td>
<td></td>
<td></td>
<td></td>



</tr>
</table>



<table class="table table-bordered">
   
    <thead>
    <tr>
        <th colspan="2">مراکزی که این ماه ارجاع دادن</th>
    </tr>
        <tr>
            <th>مرکز</th>
            <th>تعداد بیماران</th>
        </tr>
    </thead>
    <tbody>
        @foreach($centers as $center)
            <tr>
                <td>{{ $center->From }}</td>
                <td>{{ number_format($center->total_patients) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>


@endsection
