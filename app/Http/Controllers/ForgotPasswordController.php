<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgetPassword;
use App\Models\User;
use App\Models\ResetPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;


class ForgotPasswordController extends Controller
{
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showForgetPasswordForm()
      {
         return view('admin.createforgetpassword');
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitForgetPasswordForm(Request $request)
      {
          $request->validate([
            'email' => 'required|email|exists:users'
          ]);

          $token = Str::random(64);
          
          if(!ResetPassword::where('email', $request->email)->exists()){
            
            $reset = new ResetPassword;
            $reset->email = $request->email;
            $reset->token = $token;
            $reset->save();

          }else{

            $select_email = ResetPassword::where('email', $request->email)->first();
            $select_email->email = $request->email;
            $select_email->token = $token;
            $select_email->save();
            
          }

          $password_reset = ResetPassword::where('email', $request->email)->where('token', $token)->first();

          Mail::to($request->email)->send(new ForgetPassword($password_reset));
  
          return back()->with('message', 'An email has been sent to you on how to reset your password. Please check your inbox or your spam mail.');
      }
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function createresetpasswordform($token) { 
        
        return view('admin.createresetpassword', ['token' => $token]);
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitResetPasswordForm(Request $request, $token)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);
        
          $updatePassword = ResetPassword::where('email', $request->email)->where('token', $token)->first();
 
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
  
          $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);
 
                      ResetPassword::where('email', $request->email)->delete();
  
          return redirect(route('admin.index'))->with('reset', 'Your password has been successfully changed!');
      }
}