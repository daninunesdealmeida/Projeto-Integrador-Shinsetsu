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
                <th style="border:grey solid 2px;">Id</th>
                <th style="border:grey solid 2px;">Nome</th>
                <th style="border:grey solid 2px;">Telefone</th>
                <th style="border:grey solid 2px;">Rua</th>
                <th style="border:grey solid 2px;">Bairro</th>
                <th style="border:grey solid 2px;">Cidade</th>
                <th style="border:grey solid 2px;">CEP</th>
                <th style="border:grey solid 2px;">CPF</th>
                <th style="border:grey solid 2px;">RG</th>
                <th style="border:grey solid 2px;">Usuario</th>
                </thead>
        </tr>
            @foreach($pessoas as $pessoa)
            <tr>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pessoa ->id_pessoas}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pessoa ->nome}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pessoa ->telefone}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pessoa ->Rua}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pessoa ->Bairro}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pessoa ->Cidade}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pessoa ->CEP}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pessoa ->CPF}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pessoa ->RG}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$pessoa ->usuario->name}}</td>
                <td>
            </tr>
            @endforeach
</body>

</html>