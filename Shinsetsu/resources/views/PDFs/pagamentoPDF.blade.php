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
                <th style="border:grey solid 2px;">Id</th>
                <th style="border:grey solid 2px;">Cartão</th>
                <th style="border:grey solid 2px;">Nome Cartão</th>
                <th style="border:grey solid 2px;">Data Vencimento</th>
                <th style="border:grey solid 2px;">Vendas</th>
            </tr>
            </thead>
            </tr>
            @foreach($pagamentos as $pagamento)
            <tr>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pagamento ->id_pagamentos}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pagamento ->cartao}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pagamento ->nome_cartao}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;"> {{ Carbon\Carbon::parse($pagamento ->dt_vencimento)->format('d/m/Y') }} </td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pagamento ->fk_vendas}}</td>
                <td>
            </tr>
            @endforeach
</body>

</html>