<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Pessoas</title>
</head>

<body>
    <table class="table table-striped">
    <tbody>
            <tr>
            <<th>Id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>CEP</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Usuario</th>
                </thead>
        </tr>
            @foreach($pessoas as $pessoa)
            <tr>
                <td>{{$pessoa ->id_pessoas}}</td>
                <td>{{$pessoa ->nome}}</td>
                <td>{{$pessoa ->telefone}}</td>
                <td>{{$pessoa ->Rua}}</td>
                <td>{{$pessoa ->Bairro}}</td>
                <td>{{$pessoa ->Cidade}}</td>
                <td>{{$pessoa ->CEP}}</td>
                <td>{{$pessoa ->CPF}}</td>
                <td>{{$pessoa ->RG}}</td>
                <td>{{$pessoa ->usuario->nome}}</td>
                <td>
            </tr>
            @endforeach
</body>

</html>