<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{

    public function home(){
        return view('institucional.home');
    }
    
    public function bpcloas(){
        return view('institucional.bpc-loas');
    }

    public function email(Request $request){
     
    Mail::send('emails.email', [
        'nome' => $request->nome,
        'email' => $request->email,
        'assunto' => $request->assunto,
        'mensagem' => $request->mensagem,
    ], function ($message)  {        
        $message->from('unyflex@unyflex.unipublicabrasil.com.br', 'Unyflex');
        $message->sender('unyflex@unyflex.unipublicabrasil.com.br', 'Unyflex');
        $message->to('betetesgottiadvogados@gmail.com', 'Mensagem');
        $message->cc('paulo.orfanelli@unyflex.com', 'UNIPUBLICA')->subject('Mensagem');
    });

    return redirect()->back();
    }
}
