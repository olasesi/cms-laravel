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

          $reset = new ResetPassword;
          $reset->email = $request->email;
          $reset->token = $token;
          $reset->save();

          $password_reset = ResetPassword::where('email', $request->email)->where('token', $token)->first();

          Mail::to($request->get('email'))->send(new ForgetPassword($password_reset));
  
          return back()->with('message', 'An email has been sent to you on how to reset your password. Please check your inbox or your spam mail.');
      }
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showResetPasswordForm($token) { 
         return view('admin.createresetpassword', ['token' => $token]);
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required|string|min:6|confirmed',
              'password_confirm' => 'required'
          ]);
  
          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();
  
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
  
          $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);
 
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
  
          return redirect('/login')->with('message', 'Your password has been changed!');
      }
}