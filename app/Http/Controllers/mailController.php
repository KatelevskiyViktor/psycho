<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/*use Mail;*/

class mailController extends Controller
{

    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10|max:700',
            'captcha' => 'required|captcha',
        ]);

        if($request->method() == 'POST'){
            $body = "<p><b>Имя: </b>{$request->input('name')}</p>";
            $body .= "<p><b>E-mail: </b>{$request->input('email')}</p>";
            $body .= "<p><b>Сообщение: </b><br>" . nl2br($request->input('message')) . "</p>";
            Mail::to('empirikk@gmail.com')->send(new MailClass($body));
            return redirect()->route('home')->with('success', 'Письмо отправлено!');
        }

        return redirect('/');

    }

    public function send_two(Request $request){
        $request->validate([
            'email2' => 'required|email',
        ]);

        if($request->method() == 'POST'){
            $body = "<p><b>Сладкий к тебе клиент по психологии, вот адрес почты, напиши ему:</b></p>";
            $body .= "<p>{$request->input('email2')}</p>";
            Mail::to('empirikk@gmail.com')->send(new MailClass($body));
            return redirect()->route('home')->with('success', 'Письмо отправлено!');
        }

        return redirect('/');
    }
}
