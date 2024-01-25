<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Mail;
use Hash;
use Carbon\Carbon;
use App\Models\User;


class ForgotPasswordController extends Controller
{
      public function showForgetPasswordForm()
      {
      return view('admin.forgot-password');
      }


    public function submitForgetPasswordForm(Request $request)
     {
          $request->validate([
              'email' => 'required|email|exists:users',
          ]);

          $token = Str::random(64);

          DB::table('password_resets')->insert([
              'email' => $request->email,
              'token' => $token,
              'created_at' => Carbon::now()
            ]);

          Mail::send('admin.forgotPassword', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password - Heena Publishers');
          });

          return back()->with('success', 'We have e-mailed your password reset link!');
     }



    public function showResetPasswordForm($token) {
         return view('admin.reset-password', ['token' => $token]);
    }


    public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
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

          return redirect()->route('login')->with('success', 'Your password has been changed!');
      }


}
