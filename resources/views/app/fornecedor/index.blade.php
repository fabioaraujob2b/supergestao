<h3>Fornecedores</h3>
<hr>
@isset($fornecedores)
    @foreach($fornecedores as $indice => $fornecedor)
        @if($fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
        @else
            Não existe fornecedores cadastrados!!!
        @endif
    @endforeach
@endisset
