<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Protocolo;

/**
 * Esse arquivo representa o controlador ProtocoloController.
 * Um controlador (controller) é responsável por lidar com as requisições HTTP
 * e retornar as respostas apropriadas. Ele atua como um intermediário entre o modelo e a visão.
 * Aqui nós vamos criar um novo protocolo e armazená-lo no banco de dados.
 */

class ProtocoloController extends Controller
{
    // Retorna a view com o formulário de cadastro de protocolo
    public function create()
    {
        return view('protocolo.create');
    }

    /**
     * Recebe os dados do formulário, valida os campos, gera número de protocolo e
     * armazena e salva no banco de dados.
     */
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

    public function formConsulta()
    {
        return view('protocolo.consulta');
    }
    
    //Recebe o número do protocolo, busca no banco de dados e retorna os dados.
    public function consulta(Request $request)
    {
        $request->validate([
            'numero_protocolo' => 'required',
        ]);

        $protocolo = Protocolo::where('numero_protocolo', $request->numero_protocolo)->first();

        if (!$protocolo){
            return back()->with('error', 'Protocolo não encontrado.');
        }

        return view('protocolo.resultado', compact('protocolo'));
    }

    public function dashboard()
    {
        $protocolos = Protocolo::latest()->get(); //lista todos ordenados por mais recentes
        return view('dashboard', compact('protocolos'));
    }

    // Editar status do protocolo
    public function edit($id)
    {
        $protocolo = Protocolo::findOrFail($id); // Busca o protocolo pelo ID, se não encontrar, retorna erro 404 
        return view('protocolo.edit', compact('protocolo'));
        /**
         * compact('protocolo') é uma função do PHP que cria um array associativo
         * onde a chave é o nome da variável e o valor é o valor da variável.
         * Por exemplo, se a variável $protocolo contém um objeto Protocolo,
         * o array resultante será ['protocolo' => $protocolo].
         * Isso é útil para passar dados para a view protocolo.edit com os dados encontrados.
         */
    }

    public function update(Request $request, $id)
    {
        // Verifica se o campo status foi enviado e é uma string
        $request->validate([
            'status' => 'required|string',
        ]);

        $protocolo = Protocolo::findOrFail($id); // Busca protocolo pelo ID
        $protocolo->status = $request->status; // Atualiza o status do protocolo com o valor recebido $request->status
        $protocolo->save(); // Salva no bd
        // Redireciona para a rota dashboard com uma mensagem de sucesso
        return redirect()->route('dashboard')->with('success', 'Status atualizado com sucesso.');
    }
}
