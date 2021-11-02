<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Produtos</title>
</head>

<body>
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Id</th>
                <th>Data Venda</th>
                <th>Documento</th>
                <th>Total Itens</th>
                <th>Valor Vendas</th>
                <th>Produtos</th>
                </thead>
            </tr>
            @foreach($vendas as $venda)
            <tr>
                <td>{{$venda ->id_vendas}}</td>
                <td> {{ Carbon\Carbon::parse($venda ->dt_venda)->format('d/m/Y') }} </td>
                <td>{{$venda ->documento}}</td>
                <td>{{$venda ->total_itens}}</td>
                <td>{{$venda ->valor_vendas}}</td>
                <td>{{$venda ->fk_vendasItens}}</td>
                <td>
            </tr>
            @endforeach
</body>

</html>