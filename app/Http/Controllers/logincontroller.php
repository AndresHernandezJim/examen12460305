<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class logincontroller extends Controller
{
    public function store(Request $request){
        $contra=\Hash::make($request->password);
        $usuario=\DB::table('usuarios')->insert([
                'nombre'=>$request->nombre,
                'email'=>$request->email,
                'password'=>$contra,
            ]);
        return view ('website/index');
        //DB(usuario);
    }

    public function index (Request $request){
        return $request->all() ;
    }

    public function logearse(Request $request){
        if (Auth::attempt(['email' => $request->usuario, 'password' => $request->password])) {
            //crea una variable de sesion de usuario
            $usuario = Auth::user();
               //dd("creo la sesion");
                if(Auth::user()){
                    //return "eres admin";
                    //dd("eres admin");
                    $request->session()->put('administrador', $usuario);
                    return redirect('administrador/panel');
                }
            
           
          return back()->with('error', true); //peromite declarar una variable de sesion flash
        }elseif (Auth::attempt(['nombre' => $request->usuario, 'password' => $request->password])) {
            //crea una variable de sesion de usuario
            $usuario = Auth::user();
               //dd("creo la sesion");
                if(Auth::user()){
                    //return "eres admin";
                    //dd("eres admin");
                    $request->session()->put('administrador', $usuario);
                    return redirect('administrador/panel');
                }
            
           
          return back()->with('error', true); //peromite declarar una variable de sesion flash
        }
        //dd("no entro");
            
            return back()->with('error', true); //peromite declarar una variable de sesion flash
    }
    public function salir(){
        session()->forget('administrador');
        return redirect('/');
    }

}

