@extends('index')
@section('content')
<div style="border: #343a40 solid 1px; width:90%;margin-right:50px;height: auto;min-height: 400px;padding:20px;border-radius: 10px;">

<style>
    .danger{
        color:red
    }
</style>
<script>
       
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
        <form method="post" action="{{route('coststore')}}">
            @csrf
<table>
<tr>
    @error('title')
<div class="danger">
    <?php
     $message = "عنوان را وارد کنید"; 
      ?>
{{$message}}
@enderror   
    <td>عنوان هزینه    :</td>
    <td>
    
 
    <input type="text" name="title" placeholder="عنوان را وارد کنید."> </td>
</tr>

<tr>
    @error('price')
<div class="danger">
    <?php
     $message = "مبلغ را وارد کنید"; 
      ?>
{{$message}}
@enderror   
    <td> مبلغ    :</td>
    <td>
    
 
    <input type="text" name="price" placeholder="مبلغ را وارد کنید."> </td>
</tr>

<tr>
    
    @error('type')
<div class="danger">
    <?php
     $message=" نوع پرداخت را وارد کنید";  ?>
{{$message}}
@enderror    <td> نوع پرداخت :</td>
    <td>
            <select name="type"> 
            <option value="0">نقد</option> 
            <option value="1">چک</option> 
            </select>          
    </td>
    </tr>

    <tr>
    <td>
        تاریخ پرداخت/چک
    </td>
   
        <td>
        <input type="text"  name="time" placeholder="مثال:1404/05/02" >

        </td>
   
   
        
    
    <td><label id="lable"></label></td>
   <td></td>
    </tr>

    <tr>
   
   <td > 
     توضیحات:
 </td>
   

    
  <td colspan="1">
  <textarea name="discription" rows="10">

</textarea>

  </td>
</tr>
<tr>
<td colspan="3"><label value="s">
         تاریخ ثبت:

        <?php

include 'jdate/jdatetime.class.php'; 
$date = new jDateTime(true, true, 'Asia/Tehran');
 $t= $date->date("l_ j F _Y _ساعت: H:i_A");

?>
<input name="date" type="hidden" value="<?PHP  echo $t; ?>">
</label>







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
    <td colspan="2">
        <input type="submit" class="btn btn-success" style="width:190px;" value="ثبت">
    </td>
</tr>
</table>
</form>

@if (count($show) >0)
<table  class="table" style="text-align: center;margin-top: 30px;margin-bottom: 200px;">
    <th>شماره</th>
    <th> عنوان</th>
    <th> مبلغ</th>
<th>نوع پرداخت </th>
<th> تاریخ پرداخت</th>
<th>توضیحات</th>
<th> زمان ثبت</th>
<th>  حذف</th>
<th>  ویرایش</th>
<?php  $n=0; ?>
   @foreach ($show as $s )
   
  
    <tr>
        <td><?php echo $n=$n+1;  ?></td>
        <td>{{$s->title}}</td>
        <td>{{$s->price}}</td>
        <td>
          
            <?PHP
            if($s->type==0)
            echo "نقدی";
            else
            echo "چک";
        ?>
        </td>
      
        <td>{{$s->time}}</td>
        <td>{{$s->discription}}</td>
        <td>{{$s->date}}</td>
        <td ><a href="{{URL::to('/cost/delete/'.$s->id) }}"><input type="button" class="danger" value="حذف" ></a></td>
        <td ><a href="{{URL::to('/cost/update/'.$s->id) }}"><input type="button" class="success" value="بروزرسانی" ></a></td>


       
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
