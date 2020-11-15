<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    public function send()
    {
        $data = array('name'=>"palastik");
      Mail::send('email', $data, function($message) {
         $message->to('ihyaainunfikri123@gmail.com', 'Tutorials Point')->subject('Laravel HTML Testing Mail');
         $message->from('palastikofficial@gmail.com','palastik');
      });
      echo "HTML Email Sent. Check your inbox.";
    }
}
