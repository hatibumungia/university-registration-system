@extends('layouts.master')

@section('title')
Administrator
@endsection

@section('sidebar')
      <div class="nav-side-menu ">
    <div class="brand">MENU</div>
    <i class="fa fa-bars fa-3x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li data-toggle="collapse" data-target="#navigation1" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Bursa<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse " id="navigation1">
                  <li>Home</li>
                  <li>Add financial</li>
                  <li>Search students</li>
                </ul>
                     <li data-toggle="collapse" data-target="#navigation2" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Super Administrator<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="navigation2">
                  <li>Home</li>
                  <li>Add staff</li>
                  <li>Edit staff</li>
                </ul>
                        <li data-toggle="collapse" data-target="#navigation3" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> College Administrator <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="navigation3">
                  <li>Home</li>
                  <li>Add warden</li>
                  <li>Edit warden</li>
                </ul>
                           <li data-toggle="collapse" data-target="#navigation4" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Principal<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="navigation4">
                  <li>View all students</li>
                  <li>View unrgistered students</li>
                  <li>view registered students</li>
                </ul>
                               <li data-toggle="collapse" data-target="#navigation5" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Dean of students<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="navigation5">
                  <li>View all students</li>
                  <li>View unrgistered students</li>
                  <li>view registered students</li>
                </ul>
                               <li data-toggle="collapse" data-target="#navigation6" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Head of departiment<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="navigation6">
                  <li>View all students</li>
                  <li>View unrgistered students</li>
                  <li>view registered students</li>
                </ul>
                               <li data-toggle="collapse" data-target="#navigation7" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Warden<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="navigation7">
                  <li>View all students</li>
                  <li>View college students</li>
                </ul>
                               <li data-toggle="collapse" data-target="#navigation8" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Student<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="navigation8">
                  <li>home</li>
                  <li>Student registration form</li>
                  <li>student postpone</li>
                   <li>student payment summary</li> 
                </ul>
            </ul>
     </div>
</div>
@endsection
@section('contents')
      <div class="panel panel-default">
                <div class="panel-heading" style="background:gray;height:58px;">
                    @if(Auth::guest()) 
                    @else
        <p><span style="color:white;">Welcome:{{Auth::user()->name}}</span></p>
                    @endif
                </div>
</div>
                <div class="panel-body">
                 <table class="table table-strip" style="background:white;">
                    <tr style="background:#7566EF;color:white;">
                    <th>Staff name</th>
                     <th>Email Address</th>
                      <th>student</th>
                        <th>Admin</th>
                        <th>Burser</th>
                        <th>Change role</th>
                     </tr>
            
                        @foreach($users as $user)
<form action="{{route('assignrole')}}" method="post">
    <tr>
<td>{{$user->name}}</td>
<td><input type="text" name="email" value="{{$user->email}}" readonly style="border: none;"></td>
<td><input type="checkbox" name="user_role" {{$user->hasRole('User') ? 'checked':''}}  ></td>
<td><input type="checkbox" name="admin_role" {{$user->hasRole('admin') ? 'checked':''}}  ></td>
<td><input type="checkbox" name="burser_role" {{$user->hasRole('burser') ? 'checked':''}}  ></td>
{{csrf_field()}}
<td><button type="submit" class="btn btn-default">Assign roles</button></td>
    </tr>                 
</form>
    @endforeach
                    
                    </table> 
                </div>
@endsection