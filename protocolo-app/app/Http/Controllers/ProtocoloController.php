<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Protocolo;

class ProtocoloController extends Controller
{
    public function create()
    {
        return view('protocolo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'assunto' => 'required',
            'descricao' => 'required',
        ]);

        $numeroProtocolo = strtoupper(uniqid('PROTO-'));

        Protocolo::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'assunto' => $request->assunto,
            'descricao' => $request->descricao,
            'numero_protocolo' => $numeroProtocolo,
        ]);

        return "Protocolo registrado com o número: " . $numeroProtocolo;
    }
}
