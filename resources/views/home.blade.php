@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-flex justify-content-between mb-2">
              <h2 class="mt-2 mb-3">Pré Cadastros</h2>
              <div class="d-flex flex-row-reverse mb-3">
                  <a class="btn btn-custom btn-outline-deep-blue" href="{{ route('novo') }}"> <strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> Novo</strong> </i></a>
              </div>
          </div>

            <div class="card">

                    @isset($titulares)
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
                        @foreach ($titulares as $i => $titular)
                        <tr id="titular-{{$titular->id}}">
                          <th scope="row">{{ ($i + 1) }}</th>
                          <td>{{ $titular->nome }}</td>
                          <td>{{ date('d/m/Y' , strtotime($titular->created_at)) }}</td>
                          <td>{{ $titular->telefone1 }}</td>
                          <td>{{ $titular->telefone2 }}</td>
                          <td class="d-flex align-items-center">
                            <a href="" class="text-secondary mx-2" style="font-size: 1.2rem" onclick="editTitular(event, {{ $titular->id }})"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a href="" class="text-danger mx-2" style="font-size: 1.2rem" onclick="removeTitular(event, this, {{ $titular->id }})"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                          </td>
                        </tr>
                        @endforeach                    
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/pre-cadastros/index.js') }}"></script>
<script>
  window.onload = function() {
    if("{{ Session::has('success') }}") {
      toastr['success']("{{ Session::get('success') }}");
    } 
  } 
</script>
@endsection
