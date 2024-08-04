@extends('index')
@section('content')
<div style="border: #343a40 solid 1px; width:90%;margin-right:50px;height: auto;min-height: 400px;padding:20px;border-radius: 10px;">

<style>
    .danger{
        color:red
    }
</style>
<script>
        function opg()
        {
            document.getElementById('lable').innerHTML='OPG';
            document.querySelector( '#price' ).value='300,000';
            var MyDescription = document.getElementById("description");
            MyDescription.style.visibility = "hidden";
            MyDescription.value = "OPG";
        }

        function radiology()
        {
            document.getElementById('lable').innerHTML='رادیولوژی';
            document.querySelector('#price').value='350,000';
            var MyDescription = document.getElementById("description");
            MyDescription.style.visibility = "visible";
            MyDescription.value = "";
        }

          function sonografi()
        {
            document.getElementById('lable').innerHTML='سونوگرافی';
            document.querySelector('#price').value='450,000';

            var MyDescription = document.getElementById("description");
            MyDescription.style.visibility = "visible";
            MyDescription.value = "";
        }
        function cbct()
        {
            document.getElementById('lable').innerHTML='CBCT';
            document.querySelector('#price').value='850,000';
            var MyDescription = document.getElementById("description");
            MyDescription.style.visibility = "hidden";
            MyDescription.value = "CBCT";
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
        <form method="post" action="{{route('store')}}">
            @csrf
<table>
<tr>
    @error('Name')
<div class="danger">
    <?php
     $message = "نام و نام خانوادگی را وارد کنید"; 
      ?>
{{$message}}
@enderror   
    <td>نام:</td>
    <td>
    
 
    <input type="text" name="Name" placeholder="نام بیمار را وارد کنید."> </td>
    @error('Mobile')
<div class="danger">
    <?php
     $message=" موبایل را وارد کنید";  ?>
{{$message}}
@enderror    <td>موبایل:</td>
        <td><input type="text" name="Mobile" placeholder="موبایل بیمار را وارد کنید."> </td>
    </tr>

    <tr>
    <td>خدمات:</td>
   
    </tr>

    <tr>
        <td></td>
    <td colspan="3">
        <input type="button" value="OPG" class="btn btn-danger"  onclick="opg()">
        <input type="button" value="CBCT" class="btn btn-success" onclick="cbct()">
       
        <input type="button" value="سونوگرافی" class="btn btn-danger"  onclick="sonografi()">
        <input type="button" value="رادیولوژی" class="btn btn-success"  onclick="radiology()">

</td>
<tr>
    <td>@error('Insurance')
<div class="danger">
    <?php $message=" بیمه را وارد کنید";  ?>
{{$message}}
@enderror   </td>
<td><input type="radio"  name="Insurance" value="1" > بیمه دارد.</td>
</tr>
<tr>
    <td></td>
<td><input type="radio"  name="Insurance" value="0" checked> (آزاد)بیمه ندارد.</td>
</tr>
   <tr>
    <td>مبلغ:</td>
   </tr>

   <tr>
   
    <td colspan="2">@error('Price')
<div class="danger">
    <?php $message=" مبلغ را وارد کنید";  ?>
{{$message}}
@enderror    <input type="text" id="price" name="Price"  onkeyup="javascript:this.value=itpro(this.value);"> </td>
    
    <td><label id="lable"></label></td>
   <td><input type="text" name="Description" placeholder="توضیحات را وارد کنید." id="description" style="visibility:hidden" ></td>
    </tr>
<tr>
    <td colspan="2">
        <select name="Payment">

        <option value="0">pos</option>
        <option value="1">نقدی</option>
        <option value="2">کارت به کارت</option>
        </select>
</td>
</tr>
    <tr>
   
   <td > 
      نام مرکز   
 </td>
   
</tr>
<tr>
    
  <td colspan="2">
    
  <input list="listid" name="From">
  <datalist id="listid">


  @foreach ($from as $f )
  <option value="{{$f->Name}} ">


  @endforeach
 </datalist>

  </td>
  
   </tr>
<tr>
<td colspan="2"><label value="s">
        تاریخ ثبت 
        <?php

include 'jdate/jdatetime.class.php'; 
$date = new jDateTime(true, true, 'Asia/Tehran');
 $t= $date->date("l_ j F _Y _ساعت: H:i_A");
 echo $t;
?></label>
<input type="hidden" name="WeekDay" value="
<?php
 $t=$date->date("l");
 echo $t;

?>
"
>

<input type="hidden" name="Day" value="
<?php
 $t= $date->date("j");
 echo $t;

?>
"
>

<input type="hidden" name="Year" value="
<?php
 $t= $date->date("Y");
 echo $t;

?>
"
>

<input type="hidden" name="Date" value="
<?php
 $t= $date->date("l_ j F _Y _ساعت: H:i_A");
 echo $t;

?>
"
>

<input type="hidden" name="Moon" value="
<?php
 $t= $date->date("m");
 echo $t;

?>
"
>


<input type="hidden" name="UserId" value="
<?php
 $t=1;
 echo $t;

?>
"
>
</td>
<tr>
    <td colspan="2">
        <input type="submit" class="btn btn-success" style="width:190px;" value="ثبت">
    </td>
</tr>
</table>
</form>

@if (count($show) >0)
<table  class="table" style="text-align: center;margin-top: 30px;margin-bottom: 200px;">
    <th>شماره</th>
<th>نام و نام خانوادگی</th>
<th>شرح فعالیت</th>
<th>مبلغ</th>
<th>موبایل</th>
<th>ارجاع از</th>
<th>زمان</th>
<th>بیمه</th>
<th>نوع پرداخت</th>
<?php  $n=0; ?>
   @foreach ($show as $s )
   
  
    <tr>
        <td><?php echo $n=$n+1;  ?></td>
        <td>{{$s->name}}</td>
      
        <td>{{$s->Description}}</td>
        <td>{{$s->Price}}</td>
        <td>{{$s->mobile}}</td>
        <td>{{$s->From}}</td>
        <td>{{$s->date}}</td>
        <td><?php
      
        
        $insurance=$s->Insurance;
        if($insurance==0)
        echo "بیمه ندارد.";
        else
        echo "با بیمه";
          ?></td>
        <td><?php
      
        
      $payment=$s->Payment;
      if($payment==0)
      echo " pos ";
      elseif($payment==1)
      echo "نقدی ";
        else
        echo "کارت به کارت";
        ?></td>
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
