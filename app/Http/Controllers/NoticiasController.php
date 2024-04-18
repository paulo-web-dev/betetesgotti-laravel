<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;
use Auth;
class NoticiasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        
        return view('painel.home');
    }

    public function noticias(){
        $noticias = Noticias::all();
        return view('painel.noticias', [
            'noticias' => $noticias,
        ]);
    }

    public function formNoticia(){
        return view('painel.form-noticia');
    }

    public function infoNoticia(Noticias $noticia){
        return view('painel.upd-noticia',[
            'noticia' => $noticia,
        ]);
    }

    public function cadNoticia(Request $request){

        $noticia = new Noticias();
        $noticia->titulo = $request->titulo;
        $noticia->noticia = $request->noticia;
        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            
            $image = $request->file('file');
            $destinationPath = public_path('fotos-noticias/');
            $image->move($destinationPath, $photoname);
           }
        $noticia->foto = $photoname;
        $noticia->autor = Auth::user()->name;
        $noticia->save();

        return redirect()->route('noticias-painel');
    }

    public function updNoticia(Request $request){

        $noticia =  Noticias::where('id', $request->id)->first();
        $noticia->titulo = $request->titulo;
        $noticia->noticia = $request->noticia;
        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            
            $image = $request->file('file');
            $destinationPath = public_path('fotos-noticias/');
            $image->move($destinationPath, $photoname);
            $noticia->foto = $photoname;
           }
        
        $noticia->autor = Auth::user()->name;
        $noticia->save();

        return redirect()->route('noticias-painel');
    }
}
