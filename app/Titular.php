<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    protected $table = 'titulars';

    protected $fillabble = [
        'nome', 'genero', 'dtnascimento', 'cpf', 'rg',
        'emissor', 'dtemissao', 'cartao_sus', 'email',
        'telefone1', 'telefone2', 'logradouro','numero',
        'complemento', 'bairro', 'cidade', 'uf'
    ];
}
