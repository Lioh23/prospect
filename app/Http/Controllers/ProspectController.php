<?php

namespace App\Http\Controllers;

use App\Titular;
use App\Dependente;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class ProspectController extends Controller
{
    public function index() {

        $titulares = Titular::select(['id', 'nome', 'created_at', 'telefone1', 'telefone2'])->get();
        // dd($titulares);
        return view('home', compact('titulares', $titulares));
    }

    public function novo() {
        return view('novo');
    }

    public function store(Request $request) {
        try {

            // salvar titular e recuperar seu id
            $titular = new Titular([
                'nome' => $request->titular['nome'],
                'genero' => $request->titular['genero'],
                'dtnascimento' => $request->titular['dtnascimento'],
                'cpf' => $this->rmSpecialChars($request->titular['cpf']),
                'rg' => $this->rmSpecialChars($request->titular['rg']),
                'emissor' => $request->titular['emissor'],
                'dtemissao' => $request->titular['dtemissao'],
                'cartaosus' => $this->rmSpecialChars($request->titular['cartaoSus']),
                'email' => $request->titular['email'],
                'telefone1' => $this->rmSpecialChars($request->titular['telefone1']),
                'telefone2' => $this->rmSpecialChars($request->titular['telefone2']),
                'logradouro' => $request->titular['logradouro'],
                'numero' => $request->titular['numero'],
                'complemento' => $request->titular['complemento'],
                'bairro' => $request->titular['bairro'],
                'cidade' => $request->titular['cidade'],
                'uf' => $request->titular['uf']
            ]);

            $titular->save();
            if(isset($request->dependentes)) {

                foreach ($request->dependentes as $index => $dep) {
                    $dependente = new Dependente([
                        'parentesco' => $dep['parentesco'],
                        'nome' => $dep['nome'],
                        'genero' => $dep['genero'],
                        'dtnascimento' => $dep['dtnascimento'],
                        'cpf' => $this->rmSpecialChars($dep['cpf']),
                        'rg' => $this->rmSpecialChars($dep['rg']),
                        'emissor' => $dep['emissor'],
                        'dtemissao' => $dep['dtemissao'],
                        'cartaosus' => $this->rmSpecialChars($dep['cartaoSus']),
                        'titular_id' =>$titular->id
                    ]);

                    $dependente->save();
                }
            }
        } catch (\Throwable $th) {
            dd($th);
        }
        $request->session()->flash('success', 'Pr?? cadastro realizado com sucesso!');
        return response()->json(['success' => 'Dados cadastrados com sucesso!']);
    }

    public function removeTitular($id) {
        if($titular = Titular::find($id)) {
            $titular->delete();
            return response()->json(['success' => 'Registro removido com sucesso!']);
        } else {
            return response()->json(['error' => 'Registro n??o localizado!']);   
        }
    }

    private function rmSpecialChars($string) {
        $string = trim($string);
        $string = preg_replace("/[^0-9]/", '', $string);
        return $string;
    }
}
