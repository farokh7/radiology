@extends('index')
@section('content')
<div style="border: #343a40 solid 1px; width:90%;margin-right:50px;height: auto;min-height: 400px;padding:20px;border-radius: 10px;">

<style>
    .danger{
        color:red
    }
</style>
        <form method="post" action="{{route('fromstore')}}">
            @csrf
<table>
<tr>
    @error('Name')
<div class="danger">
    <?php
     $message = "نام موسسه را وارد کنید"; 
      ?>
{{$message}}
@enderror   
    <td>نام:   </td>
    <td>
    
 
    <input type="text" name="Name" placeholder="نام موسسه را وارد کنید."> </td>
    @error('Mobile')
<div class="danger">
    <?php
     $message=" شماره تماس را وارد کنید";  ?>
{{$message}}
@enderror    <td>شماره تماس:  </td>
        <td><input type="text" name="Mobile" placeholder="شماره موسسه را وارد کنید."> </td>
    </tr>

    
   
   <tr>
   
    <td >
        @error('Information')
<div class="danger">
    <?php $message=" اطلاعات را وارد کنید";  ?>
{{$message}}
</div>
@enderror   
  اطلاعات مرکز  :  
<td>
<textarea name="Information" placeholder="اطلاعات مرکز را وارد کنید." style="width: 100%;height: 100px;"></textarea>
 </td>
    
     </tr>
<tr>
    
</tr>
    <tr>
   
   <td > 
      آدرس مرکز   
 </td>
   
</tr>
<tr>
    
  <td colspan="4">
    
  <textarea name="Adrress" placeholder="آدرس مرکز را وارد کنید." style="width: 100%;height: 100px;"></textarea>
  </td>
  
   </tr>
<input type="hidden" name="Moon" value="
<?php

include 'jdate/jdatetime.class.php'; 
$date = new jDateTime(true, true, 'Asia/Tehran');
 $t= $date->date("l_ j F _Y _ساعت: H:i_A");
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
    <td colspan="4">
        <input type="submit" class="btn btn-success" style="width:100%;" value="ثبت">
    </td>
</tr>
</table>
</form>

@if (count($show) >0)
<table  class="table" style="text-align: center;margin-top: 30px;margin-bottom: 200px;">
    <th>شماره</th>
<th>نام موسسه</th>
<th>اطلاعات </th>
<th>آدرس</th>
<th>شماره تماس ها</th>

<?php  $n=0; ?>
   @foreach ($show as $s )
   
  
    <tr>
        <td><?php echo $n=$n+1;  ?></td>
        <td>{{$s->Name}}</td>
        <td>{{$s->Information}}</td>
        <td>{{$s->Adrress}}</td>
        <td>{{$s->Mobile}}</td>
       
        
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
