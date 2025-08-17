<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function guardarMensaje(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'subject'=>'required|string',
            'message'=>'required|string',
        ]);

        $contacto = new Contacto();
        $contacto->name = $request->name;
        $contacto->email = $request->email;
        $contacto->subject = $request->subject;
        $contacto->message = $request->message;
        $contacto->save();

        return redirect()->route('contactUs')->with('estadoMensaje', 'Send menssage successful..!!!');
    }

}
