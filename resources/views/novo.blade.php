@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h2 class="mt-2 mb-3">Pré Cadastro</h2>
                <div class="d-flex flex-row-reverse mb-3">
                    <a class="btn btn-custom btn-outline-danger" href="{{ route('home') }}"> <strong><i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar</strong> </i></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <form id="formPreCadastro" action="" method="POST">
                                <h3 class="effect-title my-1">Titular</h3>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group mt-1">
                                            <label for="nome">Nome</label>
                                            <input type="nome" name="nome" class="form-control" id="nome" placeholder="Insira seu nome completo" >
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group mt-1">
                                            <label for="genero">Gênero</label>
                                            <select class="form-control" id="genero" name="genero" required>
                                                <option value="0">Selecione</option>
                                                <option value="m">Masculino</option>
                                                <option value="f">Feminino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mt-1">
                                            <label for="dtnascimento">Data de Nascimento</label>
                                            <input type="date" id="dtnascimento" name="dtnascmento" class="form-control" id="dtnascimento">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group mt-1">
                                            <label for="cpf">CPF</label>
                                            <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Insira o cpf">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mt-1">
                                            <label for="rg">RG</label>
                                            <input type="text" name="rg" class="form-control" id="rg" placeholder="Insira o RG">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mt-1">
                                            <label for="emissor">Órgão Emissor</label>
                                            <input type="text" name="emissor" class="form-control" id="emissor" placeholder="Insira o Órgão Emissor">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mt-1">
                                            <label for="dtnascimento">Data de Emissão</label>
                                            <input type="date" id="dtemissao" name="dtemissao" class="form-control" id="dtemissao">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mt-1">
                                            <label for="cartao-sus">Cartão do SUS</label>
                                            <input type="text" name="cartao-sus" class="form-control" id="cartao-sus" placeholder="Número do cartão do SUS">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group mt-1">
                                            <label for="email">E-Mail</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="exemplo@exemplo.com.br">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mt-1">
                                            <label for="contato-1">Telefone / Celular</label>
                                            <input type="text" name="contato-1" class="form-control" id="contato-1" placeholder="Informe um telefone">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mt-1">
                                            <label for="contato-2">Telefone / Celular</label>
                                            <input type="text" name="contato-2" class="form-control" id="contato-2" placeholder="Informe outro telefone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mt-1">
                                            <label for="logradouro">Logradouro</label>
                                            <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Informe o seu endereço">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group mt-1">
                                            <label for="numero-residencia">Número</label>
                                            <input type="text" name="numero-residencia" class="form-control" id="numero-residencia">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mt-1">
                                            <label for="complemento">Complemento</label>
                                            <input type="text" name="complemento" class="form-control" id="complemento">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mt-1">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Informe o bairro">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mt-1">
                                            <label for="cidade">Cidade</label>
                                            <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Informe a cidade">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group mt-1">
                                            <label for="uf">UF</label>
                                            <input type="text" name="uf" class="form-control" id="uf"  maxlength="2" minlength="2">
                                        </div>
                                    </div>
                                </div>

                                <section class="dependentes"></section>

                                <div class="row">
                                    <div class="col-md-12 my-2 d-flex flex-row-reverse">
                                        <button type="button" id="add-dependente" class="btn btn-custom btn-outline-success"> <i class="fa fa-plus" aria-hidden="true"></i> <strong class="mx-1">Adicionar dependente</strong> </button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-custom btn-success px-4" value="Salvar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script src="{{ asset('js/pre-cadastro/FormDependente.js') }}"></script>
    <script src="{{ asset('js/pre-cadastro/index.js') }}"></script>
@endsection

@endsection
