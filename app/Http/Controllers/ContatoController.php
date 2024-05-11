<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarEmail;

class ContatoController extends Controller
{
    public function enviarEmail(Request $request)
    {
        // Valide os dados do formulário, se necessário

        $nome = $request->input('name');
        $email = $request->input('email');

        // Envie o e-mail para o Mailtrap usando o endereço de e-mail gerado com alias
        Mail::to('556049f167-242bfe+1@inbox.mailtrap.io')->send(new EnviarEmail($nome, $email));

        // Redirecione de volta com uma mensagem de sucesso ou algo assim
        return redirect()->back()->with('success', 'E-mail enviado com sucesso!');
    }
}
