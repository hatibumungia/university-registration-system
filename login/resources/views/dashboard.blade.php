<h1>congratulation you logined as {{Auth::user()->name}}</h1>
@if(Auth::check())
<a href="{{route('adminlogout')}}">logout</a>
@endif