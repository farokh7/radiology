@extends('index')
@section('content')
<div style="border: #343a40 solid 1px; width:90%;margin-right:50px;height: auto;min-height: 400px;padding:20px;border-radius: 10px;">

<style>
    .danger{
        color:red
    }
</style>
<script>
       
       
        </script>
        <form method="post" action="{{route('userregedit')}}">
            @csrf
<table>
<tr>
    @error('name')
<div class="danger">
    <?php
     $message = "نام و نام خانوادگی را وارد کنید"; 
      ?>
{{$message}}
@enderror   
    <td>نام:</td>
    <td>
    
 
    <input type="text" name="name" placeholder="نام و نام خانوادگی را وارد کنید."> </td>

</tr>
<tr>
    @error('user')
<div class="danger">
    <?php
     $message = "نام کاربری را وارد کنید"; 
      ?>
{{$message}}
@enderror   
    <td>نام کاربری:</td>
    <td>
    
 
    <input type="text" name="user" placeholder="نام کاربری را وارد کنید."> </td>

</tr>

<tr>
    @error('mobile')
<div class="danger">
    <?php
     $message = " موبایل را وارد کنید"; 
      ?>
{{$message}}
@enderror   
    <td>موبایل:</td>
    <td>
    
 
    <input type="text" name="mobile" placeholder=" موبایل را وارد کنید."> </td>

</tr>

<tr>
    @error('address')
<div class="danger">
    <?php
     $message = " آدرس را وارد کنید"; 
      ?>
{{$message}}
@enderror   
    <td>آدرس:</td>
    <td>
    
 
    <input type="text" name="address" placeholder=" آدرس را وارد کنید."> </td>

</tr>

<tr>
    @error('password')
<div class="danger">
    <?php
     $message = " پسورد را وارد کنید"; 
      ?>
{{$message}}
@enderror   
    <td>کلمه ی عبور:</td>
    <td>
    
 
    <input type="text" name="password" placeholder="پسورد را وارد کنید."> </td>

</tr>

<tr>
    @error('isadmin')
<div class="danger">
    <?php
     $message = " ادمین  را وارد کنید"; 
      ?>
{{$message}}
@enderror   
    <td>نوع:</td>
    <td>
    
 
    <select name="isadmin">
    <option value="0">کاربر عادی</option>
    <option value="1"> ادمین</option>
</select>
    </td>

</tr>
<tr>
<td></td>
<td><input type="submit" class="btn btn-success" style="width:100%" value="ثبت"></td>
</tr>


</table>




</table>
</form>

@if (count($show) >0)
<table  class="table" style="text-align: center;margin-top: 30px;margin-bottom: 200px;">
    <th>شماره</th>
<th>نام و نام خانوادگی</th>
<th>نام کاربری </th>

<th>موبایل</th>
<th>آدرس</th>


<th>نوع کاربر</th>
<?php  $n=0; ?>
   @foreach ($show as $s )
   
  
    <tr>
        <td><?php echo $n=$n+1;  ?></td>
        <td>{{$s->name}}</td>
      
        <td>{{$s->user}}</td>
        <td>{{$s->mobile}}</td>
        <td>{{$s->address}}</td>
      
      
       
        <td><?php
      
        
        $isadmin=$s->isadmin;
        if($isadmin==0)
        echo " کاربر نقره ای ";
        else
        echo "ادمین ";
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
