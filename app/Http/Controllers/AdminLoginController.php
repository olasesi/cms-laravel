<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;




class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(Request $request){
        $user = User::where('email', '=', $request->email)->where('active', '=', '1')->first();
       
        if(!$user || !Hash::check($request->password, $user->password)){
         
          return "Username or password is not matched";
          }else{
             $request->session()->put('users', $user);
            
                 return redirect('/dashboard');
             }
       

    }

    public function logout(){
        
        Session::flush();
        return redirect('/admin');
    }

    public function users(){

        return view('/users');
    }
}
