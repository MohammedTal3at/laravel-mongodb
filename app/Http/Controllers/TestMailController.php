<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Exception;

class TestMailController extends Controller
{
    //
    public function send()
    {
    	$data = array('name'=>"Mohamed Talaat");
   
      try {
      	Mail::send('email.test', $data, function($message) {
         $message->to('m.talaat@esmaar.net', 'Mohamed Talaat')->subject
            ('Laravel Basic Testing Mail');
         $message->from('m.talaat377@gmail.com','Mohamed Talaat');
      });
      } catch (Exception $e) {
      	return $e->getMessage();
      }
      return "Email sent successfuly";
    }
}
