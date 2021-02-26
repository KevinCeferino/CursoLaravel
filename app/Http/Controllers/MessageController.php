<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request){
       $message =  $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'subject' => 'required',
            'content' => 'required|min:3'
        ],[
            'name.required' => 'Necesito tu nombre'
        ]);

        // Enviar Email

        Mail::to('kevin.ceferino000@gmail.com')->queue(new MessageReceived($message));

        return back()->with('status', 'Recibimos tu mensaje');
    }
}
