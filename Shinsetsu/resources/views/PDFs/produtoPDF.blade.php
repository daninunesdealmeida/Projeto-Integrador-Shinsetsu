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
                <th style="border:grey solid 2px;">Id</th>
                <th style="border:grey solid 2px;">Nome</th>
                <th style="border:grey solid 2px;">Especificações</th>
                <th style="border:grey solid 2px;">Preço</th>
                <th style="border:grey solid 2px;">Qt Estoque</th>
                <th style="border:grey solid 2px;">Estoque Mínimo</th>
                </thead>
            </tr>
            @foreach($produtos as $produto)
            <tr>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$produto ->id_produtos}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$produto ->nome}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$produto ->especificacao}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$produto ->preco}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$produto ->qt_estoque}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$produto ->estoque_minimo}}</td>
                <td>
            </tr>
            @endforeach
</body>

</html>