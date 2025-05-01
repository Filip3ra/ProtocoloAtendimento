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
    /** 
     * Define quais campos podem ser preenchidos em massa.
     * Isso é uma medida de segurança para evitar a atribuição em massa (mass assignment)
     * de campos que não deveriam ser preenchidos diretamente.
     */
    protected $fillable = [
        'nome',
        'cpf',
        'assunto',
        'descricao',
        'numero_protocolo',
        'status'
    ];
}
