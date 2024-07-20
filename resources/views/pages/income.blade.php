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
<tr>@error('name')
<div class="danger">
    <?PHP $message="نام و نام خانوادگی را وارد کنید";  ?>
{{$message}}
@enderror   
    <td>نام:</td>
    <td>
    
 
    <input type="text" name="name" placeholder="نام بیمار را وارد کنید."> </td>
    @error('name')
<div class="danger">
    <?PHP $message=" موبایل را وارد کنید";  ?>
{{$message}}
@enderror    <td>موبایل:</td>
        <td><input type="text" name="mobile" placeholder="موبایل بیمار را وارد کنید."> </td>
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
    <?PHP $message=" بیمه را وارد کنید";  ?>
{{$message}}
@enderror   </td>
<td><input type="radio"  name="Insurance" value="1"> بیمه دارد.</td>
</tr>
<tr>
    <td></td>
<td><input type="radio"  name="Insurance" value="0"> (آزاد)بیمه ندارد.</td>
</tr>
   <tr>
    <td>مبلغ:</td>
   </tr>

   <tr>
   
    <td colspan="2">@error('Price')
<div class="danger">
    <?PHP $message=" مبلغ را وارد کنید";  ?>
{{$message}}
@enderror    <input type="text" id="price" name="Price"  onkeyup="javascript:this.value=itpro(this.value);"> </td>
    
    <td><label id="lable"></label></td>
   <td><input type="text" name="description" placeholder="توضیحات را وارد کنید." id="description" style="visibility:hidden" ></td>
    </tr>

    <tr>
   
   <td > 
      نام مرکز   
 </td>
   
</tr>
<tr>
    
  <td colspan="2">
    
  <input list="listid" name="from">
  <datalist id="listid">

<option value="ال محمد">

 <option value="فرجام ">

 <option value="دکتر حایری">

<option value="دکتر معزز">

<option value="اهنگ سلامتی">



<option value="دکتر حیدر زاده ">

 <option value="دکتر زریان ">

 <option value="دکتر زهرا قاسمی">

<option value="امام رضا">

<option value="دکتر محمدی اصل ">

<option value="آزاد">

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
<?PHP
 $t=$date->date("l");
 echo $t;

?>
"
>

<input type="hidden" name="Day" value="
<?PHP
 $t= $date->date("j");
 echo $t;

?>
"
>

<input type="hidden" name="Year" value="
<?PHP
 $t= $date->date("Y");
 echo $t;

?>
"
>

<input type="hidden" name="date" value="
<?PHP
 $t= $date->date("l_ j F _Y _ساعت: H:i_A");
 echo $t;

?>
"
>

<input type="hidden" name="Moon" value="
<?PHP
 $t= $date->date("m");
 echo $t;

?>
"
>


<input type="hidden" name="UserId" value="
<?PHP
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
<table  class="table">
    
   @foreach ($show as $s )
   
  
    <tr>
        <td>{{$s->name}}</td>
        <td>{{$s->mobile}}</td>
        <td>{{$s->description}}</td>
        <td>{{$s->price}}</td>
        <td>{{$s->from}}</td>
        <td>{{$s->date}}</td>
        <td>{{$s->day}}</td>
        <td>{{$s->year}}</td>
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
