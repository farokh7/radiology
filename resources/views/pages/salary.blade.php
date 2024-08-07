@extends('index')
@section('content')
<div style="border: #343a40 solid 1px; width:90%;margin-right:50px;height: auto;min-height: 400px;padding:20px;border-radius: 10px;">

<style>
    .danger{
        color:red
    }
</style>
<script>
        function mohasebe()
        {
          
            
           
            document.getElementById("Price").innerText  = parseInt(document.getElementById("hour").value) * parseInt(document.getElementById("PayForHour").value);
        

        }

            function m()
            {
                document.getElementById("Price").innerText  = parseInt(document.getElementById("hour").value) * parseInt(document.getElementById("PayForHour").value);
        
            }
        function itpro(Number) 
  {
       Number+= '';
        Number= Number.replace(',', ''); Number= Number.replace(',', ''); Number= Number.replace(',', '');
        Number= Number.replace(',', ''); Number= Number.replace(',', ''); Number= Number.replace(',', '');
        x = Number.split('.');
        y = x[0];
        z= x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
         while (rgx.test(y))
          y= y.replace(rgx, '$1' + ',' + '$2');
          return y+ z;
  }
        </script>
        <form method="post" action="{{route('salarystore')}}">
            @csrf
<table>
<tr>
    @error('Name')
<div class="danger">
    <?php
     $message = "نام همکار را وارد کنید"; 
      ?>
{{$message}}
@enderror   
    <td>نام همکار    :</td>
    <td>
    
 
    <input type="text" name="Name" placeholder="نام  همکار را وارد کنید."> </td>
    @error('hour')
<div class="danger">
    <?php
     $message=" میزان ساعت کاری را وارد کنید";  ?>
{{$message}}
@enderror    <td>میزان ساعت کاری:</td>
        <td><input type="text" name="Hour" id="Hour"  onchange="mohasebe()" onkeyup="mohasebe()" value="0" placeholder="میزان ساعت کاری را وارد کنید."> </td>
    </tr>

    <tr>
    <td>میزان پرداختی برای هر ساعت
    :</td>
   
        <td>
        <input type="text"  name="PayForHour" id="PayForHour"  value="0" onkeyup="javascript:this.value=itpro(this.value); ">

        </td>
   
   
        
    
    <td><label id="lable"></label></td>
   <td></td>
    </tr>

    <tr>
   
   <td > 
      کسب و کار:
 </td>
   

    
  <td colspan="1">
   <input type="text" name="Business" value="رادیولوژی">

  </td>
  <td>پرداخت اضافه/کلی:</td>
  <td><input type="text" name="OverPay" value="0"  onkeyup="javascript:this.value=itpro(this.value); "></td>
   </tr>
<tr>
<td colspan="4"><label value="s">
       برای چه تاریخی:
        <?php

include 'jdate/jdatetime.class.php'; 
$date = new jDateTime(true, true, 'Asia/Tehran');
 $t= $date->date("l_ j F _Y _ساعت: H:i_A");
 //echo $t;
?></label>




<input style="width: 10%;" type="text" name="day" value="
<?php
 $t= $date->date("j");
 echo $t;

?>
"
>


<input style="width: 10%;" type="text" name="Moon" value="
<?php
 $t= $date->date("m");
 echo $t;

?>
"
>
<input style="width: 10%;" type="text" name="Year" value="
<?php
 $t= $date->date("Y");
 echo $t;

?>
"
>

</td>
<tr>
    <td>

    توضیحات:
    </td>
    <td>
    <textarea name="discription" rows="5">

</textarea>
    </td>
</tr>
<tr>
    <td></td>
    <td colspan="1">
        <input type="submit" class="btn btn-success" style="width:100%;" value="ثبت">
    </td>
</tr>
</table>
</form>

@if (count($show) >0)
<table  class="table" style="text-align: center;margin-top: 30px;margin-bottom: 200px;">
    <th>شماره</th>
<th>نام و نام خانوادگی</th>
<th>ساعت </th>
<th>ساعتی چند</th>
<th>مبلغ</th>
<th> ماه</th>
<th>سال</th>
<th>مبلغ اضافه/یکجا</th>
<th> توضیحات</th>
<th>نوع کسب و کار</th>
<th>  مبلغ کل</th>
<th>   حذف</th>
<?php  $n=0; ?>
   @foreach ($show as $s )
   
  
    <tr>
        <td><?php echo $n=$n+1;  ?></td>
        <td>{{$s->Name}}</td>
      
        <td>{{$s->Hour}}</td>
        <td>{{$s->PayForHour}}</td>
        <td>{{number_format($s->Price)}}</td>
        <td>{{$s->Moon}}</td>
        <td>{{$s->Year}}</td>
        <td>{{$s->OverPay}}</td>
        <td>{{$s->discription}}</td>
        <td>{{$s->Business}}</td>
        <td>{{number_format(intval (str_replace(",","",$s->OverPay)) + intval($s->Price))}}</td>
        <td ><a href="{{URL::to('/salary/delete/'.$s->id) }}"><span class="glyphicon glyphicon-trash">حذف</span></a></td>

        <td></td>
    </tr>
    @endforeach
</table>
@else
<p>
    هنوز چیزی ثبت نکردید!
</p>
@endif


</div>
@endsection
