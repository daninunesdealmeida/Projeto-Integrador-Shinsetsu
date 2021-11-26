<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Categorias</title>
</head>

<body>
    <table class="table table-striped">
        <tbody>

            <tr>
                <th style="border:grey solid 2px;">Id</th>
                <th style="border:grey solid 2px;">Nome</th>
            </tr>
            </thead>
            </tr>
            @foreach($categorias as $categoria)
            <tr>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$categoria ->id_categorias}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$categoria ->nome}}</td>
                <td>
            </tr>
            @endforeach
</body>

</html>