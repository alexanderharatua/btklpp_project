<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
   
    public function send(Request $request)
    {   
        $email = $request->input('email'); // nama
        $to = $request->input('to');
        $name = $request->input('nama');
        $text = $request->input('text');
        $isi = $request->input('isi');
        $data = array('name' => $name, 'to' => $to);
        Mail::send([],[], function($message) use ($data, $email,$name,$isi){
        
         $message->to($data['to'], 'Admin')->subject('Pengaduan');
         $message->from('wbsbtklpp@gmail.com', $data['name']);
         $message->setBody('<h1> Laporan Pengaduan </h1> <br>'.'from : '.$email.'<br> nama : '.$name. '<br>  Isi pengaduan: '.$isi,'text/html');
      });
      return redirect()->back() ->with('alert', 'Updated!');
    }
}
