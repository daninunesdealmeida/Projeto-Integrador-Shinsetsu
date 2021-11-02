<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Pagamentos</title>
</head>

<body>
    <table class="table table-striped">
        <tbody>

            <tr>
                <th>Id</th>
                <th>Cartão</th>
                <th>Nome Cartão</th>
                <th>Data Vencimento</th>
                <th>Boleto</th>
                <th>Vendas</th>
            </tr>
            </thead>
            </tr>
            @foreach($pagamentos as $pagamento)
            <tr>
                <td>{{$pagamento ->id_pagamentos}}</td>
                <td>{{$pagamento ->cartao}}</td>
                <td>{{$pagamento ->nome_cartao}}</td>
                <td> {{ Carbon\Carbon::parse($pagamento ->dt_vencimento)->format('d/m/Y') }} </td>
                <td>{{$pagamento ->boleto}}</td>
                <td>{{$pagamento ->vendas->documentos}}</td>
                <td>
            </tr>
            @endforeach
</body>

</html>