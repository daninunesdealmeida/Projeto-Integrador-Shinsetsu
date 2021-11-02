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
                <th>Nome</th>
                <th>Especificações</th>
                <th>Preço</th>
                <th>Qt Estoque</th>
                <th>Estoque Mínimo</th>
                </thead>
            </tr>
            @foreach($produtos as $produto)
            <tr>
                <td>{{$produto ->id_produtos}}</td>
                <td>{{$produto ->nome}}</td>
                <td>{{$produto ->especificacao}}</td>
                <td>{{$produto ->preco}}</td>
                <td>{{$produto ->qt_estoque}}</td>
                <td>{{$produto ->estoque_minimo}}</td>
                <td>
            </tr>
            @endforeach
</body>

</html>