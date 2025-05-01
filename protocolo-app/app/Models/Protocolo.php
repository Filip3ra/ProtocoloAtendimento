<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Esse arquivo representa o modelo Protocolo. Um modelo (model) é uma representação de uma tabela no banco de dados.
 * Ele é responsável por interagir com a tabela 'protocolos' no banco de dados.
 * Aqui nós vamos buscar, inserir, atualizar e deletar os dados da tabela.
 */


class Protocolo extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'assunto',
        'descricao',
        'numero_protocolo',
        'status'
    ];
}
