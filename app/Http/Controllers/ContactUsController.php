<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactUsController extends Controller
{

  public function index()
  {

    return view('contact-us');

  }


  public function send_inquiry(Request $request)
  {
    $inputs = $request->all();

      \Mail::send('/partials/inquiry', array(
      'name' => $inputs['name'],
      'email' => $inputs['email'],
      'subject' => $inputs['subject'],
      'inquiry' => $inputs['inquiry'],
      ), function($message) use ($request){
        $message->from($request->email);
        $message->to('iresh.enrich@gmail.com')->subject($request->get('subject'));
      });

    return redirect()->back()->with('success', 'Inquiry sent successfully !!!');
  }

}
