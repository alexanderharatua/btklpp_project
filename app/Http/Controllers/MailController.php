<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
   
    public function send(Request $request)
    {   
        $email = $request->input('email');
        $to = $request->input('to');
        $name = $request->input('nama');
        $text = $request->input('text');
        $isi = $request->input('isi');
        $data = array('name' => $name, 'to' => $to);
        Mail::raw('from : '.$email.' nama : >>>>>'.$name. ' >>>>>>> Isi pengaduan: '.$isi, function($message) use ($data){
        
         $message->to($data['to'], 'Tutorials Point')->subject('Pengaduan');
         $message->from('hihihihi@gmail.com', $data['name']);
      });
      return redirect()->back() ->with('alert', 'Updated!');
    }
}
