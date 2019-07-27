<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;

class ControllerMensajes extends Controller
{
    public function datos(Request $request){

    	$mensaje = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required',
    	]);

        Mail::to('xavwlr@gmail.com')->send(new MensajeRecibido($mensaje));	
        return new MensajeRecibido($mensaje);
    }

    public function contacto(){
    	return view('contacto');
    }
}
