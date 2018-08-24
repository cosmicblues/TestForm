<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller{


    public function send(Request $request){
        $list = $request->all();
        

        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);

        Mail::send(['test'=>'mail'], $list ,function($message) use ($list) {
            $message->to($list['email'], 'to theo')->subject('test email');
            $message->from('mugenmusou78@gmail.com', 'Inscription reussi test technique');
            $message->setBody("genre : " . $list['genre'] . "<br> prenom : " . $list['prenom'] . " <br> name : " . $list['name'] . "<br> prenom : " . $list['prenom'] . "<br> password : " . $list['password'] . "<br> mail : " . $list['email'] . "<br> birthdate : " . $list['birthdate'] . "<br> postalcode : " . $list['postalcode'], 'text/html');
        });
        return redirect('/');
    }    
}
