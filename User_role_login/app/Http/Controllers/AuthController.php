<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use App\role;
use Session;
use Cache;
class AuthController extends Controller
{
    public function index(){
        return view('index');
    }
   public function getLogin(){
       return view('auth.login');
   }
    public function getdashboard(){
        $users=User::all();
        return view('Admin.home',['users'=>$users]);
    }
  public function postLogin(Request $request){
     //validation of the fields
     $this->validate($request,[
     'email'=>'required',
     'password'=>'required'
     ]);
if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]))
{
return redirect()->route('dashboard');
}
return redirect()->back()->with(['fail'=>'Huwezi kuingia umekosea password au email yako']);
      
  }
    public function getlogout(){
    Auth::logout();
    Session::flush();
    Cache::flush();
    return redirect(property_exists($this, '/') ? $this->redirectAfterLogout : '/');
    }
    public function assignrole(Request $request){
        if(isset($request['email'])){
            $user=User::where('email',$request['email'])->first();
    $user->roles()->detach();
    if($request['user_role']){
     $user->roles()->attach(Role::where('name','User')->first());
    }
    if($request['admin_role']){
    $user->roles()->attach(Role::where('name','admin')->first());
    }
       if($request['burser_role']){
    $user->roles()->attach(Role::where('name','burser')->first());
    }
    return redirect()->back();   
        }else{
           return response('No details');
        }
 
    }
}
