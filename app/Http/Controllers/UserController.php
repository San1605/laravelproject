<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
  function list(){
    $user=User::all();
     return view('userList',['user'=>$user]);
  }  
  function create(){
    return view('create');
 }   

 
 public function createsubmit(Request $req){
          // print_r($req->input());
    
    
      $user=new User;
      $user->name=$req->name;
      $user->email=$req->email;
      $user->password=$req->password;
      
    $result=$user->save();
    
    if($result){
        return redirect('/');
    }
    else{
        return  print_r($req->input());
    }
    
    }

public  function loginsubmit(Request $req){
    // return User::all();
     User::select('*')->where(
[
['email','=',$req->email],
['password','=',$req->password],
]
    )->get();
   $req->session()->put('logData',[$req->input()]);
   return redirect('/list');
 }  



}