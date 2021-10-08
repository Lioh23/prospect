<?php

namespace App\Http\Controllers;

use App\Titular;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class ProspectController extends Controller
{
    public function index() {
        return view('home');
    }

    public function novo() {
        return view('novo');
    }

    public function store(Request $request) {
        try {

            dd($this->rmSpecialChars($request->titular['telefone1']), $this->rmSpecialChars($request->titular['cpf']));
            // salvar titular e recuperar seu id
            $titular = new Titular([
                'nome' => $request->titular['nome'],
                'genero' => $request->titular['genero'],
                'dtnascimento' => $request->titular['dtnascimento'],
                'cpf' => $request->titular['cpf'],
                'rg' => $request->titular['rg'],
                'emissor' => $request->titular['emissor'],
                'dtemissao' => $request->titular['dtemissao'],
                'cartaosus' => $request->titular['cartaoSus'],
                'email' => $request->titular['email'],
                'telefone1' => $request->titular['telefone1'],
                'telefone2' => $request->titular['telefone2'],
                'logradouro' => $request->titular['logradouro'],
                'numero' => $request->titular['numero'],
                'complemento' => $request->titular['complemento'],
                'bairro' => $request->titular['bairro'],
                'cidade' => $request->titular['cidade'],
                'uf' => $request->uf
            ]);
            $titular->save();
            dd($titular);
        } catch (\Throwable $th) {
            dd($th);
        }

        return response()->json($request->all());
    }

    private function rmSpecialChars($string) {
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }
}
