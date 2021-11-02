<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Venda Ítens</title>
</head>

<body>
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Id</th>
                <th>Quantidade</th>
                <th>vlr unitário</th>
                <th>Produtos</th>
                </thead>
            </tr>
            @foreach($venda_Itens as $venda_Item)
            <tr>
                <td>{{$venda_Item ->id_vendaItens}}</td>
                <td>{{$venda_Item ->quantidade}}</td>
                <td>{{$venda_Item ->vlr_unitário}}</td>
                <td>{{$venda_Item ->fk_produtos}}</td>
                <td>
            </tr>
            @endforeach
</body>

</html>