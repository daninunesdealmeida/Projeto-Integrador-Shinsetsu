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
                <th style="border:grey solid 2px;">Id</th>
                <th style="border:grey solid 2px;">Quantidade</th>
                <th style="border:grey solid 2px;">vlr unitário</th>
                <th style="border:grey solid 2px;">Produtos</th>
                </thead>
            </tr>
            @foreach($venda_Itens as $venda_Item)
            <tr>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$venda_Item ->id_vendaItens}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$venda_Item ->quantidade}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$venda_Item ->vlr_unitário}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$venda_Item ->fk_produtos}}</td>
                <td>
            </tr>
            @endforeach
</body>

</html>