@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="mt-2 mb-3">Pré Cadastros</h2>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row-reverse mb-3">
                        <a type="button" class="btn btn-info text-white" href="{{ route('novo') }}">Novo</a>
                    </div>

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col" width="40">#</th>
                            <th scope="col"width="300">Nome</th>
                            <th scope="col"width="">Pré Cadastro</th>
                            <th scope="col"width="">Contato 1</th>
                            <th scope="col"width="">Contato 2</th>
                            <th scope="col"width="">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark Brito</td>
                            <td>25/08/2021</td>
                            <td>(24) 98843-1762</td>
                            <td>(24) 3328-0671</td>
                            <td>Editar | Apagar</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob da Luz Gonçalves</td>
                            <td>25/08/2021</td>
                            <td>(24) 98843-1762</td>
                            <td>(24) 3328-0671</td>
                            <td>Editar | Apagar</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry Bird de Almeida</td>
                            <td>25/08/2021</td>
                            <td>(24) 98843-1762</td>
                            <td>(24) 3328-0671</td>
                            <td>Editar | Apagar</td>
                          </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
