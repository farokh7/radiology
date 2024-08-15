<!DOCTYPE html>


<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('loginstyle.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      
      
    </head>
    <body>
       
    
    <div id="loginform">
        <form action="{{route('checkuser')}}" method="post" >
           
            @csrf
       <table>
            <tr>
            <td>نام کاربری</td>
            <td><input type="text" placeholder="نام کاربری را وارد کنید." name="user"></td>
            </tr>

            <tr>
            <td>کلمه ی عبور </td>
            <td><input type="password" placeholder="کلمه ی عبور را وارد کنید." name="password"></td>
            </tr>
            <tr>
            <td></td>
            <td><input class="btn btn-success" type="submit" value="ورود"></td>
            </tr>
        </table>
    
</form>
    </div>
       
        <script src="" async defer></script>
    </body>
</html>