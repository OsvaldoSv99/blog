<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store()
    {
       $message = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
        ],[
            'name.required' => 'Necesito tu nombre',
        ]);

        Mail::to('osvaldomago99@gmail.com')->queue(new MessageReceived($message));


        return "Mensaje Enviado";
    }
}
