<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">
<link rel="stylesheet" href="{{URL::to('src/css/bootstrap.css')}}">
<title>SRS</title>    
</head>
<body>
<!--this is validation messages after fails to login-->
@if(Count($errors)>0) 
<section class="info-box fail">
@foreach($errors->all() as $error)
        {{$error}}
@endforeach
</section>
@endif

@if(Session::has('fail')) 
<section class="info-box fail">
{{Session::get('fail')}}
</section>
@endif
<form action="{{route('adminlogin')}}" method="post">
<div class="input-group">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" placeholder="Email">
    </div><br>
     <div class="input-group">
     <label for="password">password:</label>
    <input type="password" name="password" id="password" placeholder="password">
      </div>
    <input type="hidden" name="_token" value="{{Session::token()}}" />
    <button type="submit">login</button>
</form>
    </body>
    
</html>