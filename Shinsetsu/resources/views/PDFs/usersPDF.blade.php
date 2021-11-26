<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Usuarios</title>
</head>

<body>
    <table class="table table-striped">
        <tbody>
            <tr>
                <th style="border:grey solid 2px;">Id</th>
                <th style="border:grey solid 2px;">Nome</th>
                <th style="border:grey solid 2px;">Email</th>
                </thead>
            </tr>
            @foreach($users as $user)
            <tr>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$user ->id}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$user ->name}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$user ->email}}</td>
                <td>
            </tr>
            @endforeach
</body>

</html>