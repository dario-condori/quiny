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
            'name'=>'required|string|max:100|not_regex:/<script>|<\/script>|href=/i',
            'email'=>'required|email',
            'subject'=>'required|string|max:250|not_regex:/<script>|<\/script>|href=/i',
            'message'=>'required|string|max:1000|not_regex:/<script>|<\/script>|href=/i',
        ]);

        $contacto = new Contacto();
        $contacto->name = $request->name;
        $contacto->email = $request->email;
        $contacto->subject = $request->subject;
        $contacto->message = $request->message;
        $contacto->save();

        return redirect()->route('inicio')->with('estadoMensaje', 'Send menssage successful..!!!');
        // return response()->json([
        //     'status' => true,
        //     'message' => 'Send menssage successful..!!!'
        // ], 200);

    }

    public function mensajes()
    {
        $mensajes = Contacto::all();
        return view('admin.mensajes', compact('mensajes'));
    }

}
