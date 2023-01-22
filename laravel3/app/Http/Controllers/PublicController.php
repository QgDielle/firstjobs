<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        return view('welcome');
    }
    public function contact_us(){
        return view('contattaci');
    }
    public function contact_submit(Request $request){
        $name = $request->input('name');
        $email = $request->email;
        $message = $request->message;

        $user_data =compact('name', 'message');
        try{
            Mail::to($email)->send(new ContactMail($user_data));
        } catch(Exception $error){
            return redirect(route('homepage'))->with('emailError', 'non è stato possibile accogliere la tua richiesta, riprova più tardi');
        }
        return redirect(route('homepage'))->with('emailSent', "Grazie per averci contattato, riceverai una mail di conferma");
    }
}
