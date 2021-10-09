<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependente extends Model
{
    protected $table = 'dependentes';

    protected $fillable = [
        'parentesco', 'nome', 'genero', 'dtnascimento', 'cpf', 'rg',
        'emissor', 'dtemissao', 'cartao_sus', 'titular_id'
    ];
}
