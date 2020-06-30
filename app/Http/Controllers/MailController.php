<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function send(){
        $details = [
            'title' => 'Registo da avaria',
            'body' => 'O registo que fez da avaria foi registado e será resolvido assim que possivel. Obrigado por ajudar a detetar esta avaria.',
        ];
        $user = Auth::user()->email;
        \Mail::to($user)->send(new \App\Mail\SendMail($details));
        return view('emails.yh');
    }
}
