<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Agendamentos</title>
</head>

<body>
<table class="table table-striped">
                        <tbody>
                                
                                <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Modalidade</th>
                                        <th>Dia</th>
                                        <th>Hora</th>
                                        <th>Pessoas</th>
                                </tr>
                                @foreach($agendamentos as $agendamento)
                                <tr>
                                        <td>{{$agendamento ->id_agendamentos}}</td>
                                        <td>{{$agendamento ->nome}}</td>
                                        <td>{{$agendamento ->modalidade}}</td>
                                        <td>{{ Carbon\Carbon::parse($agendamento ->dia)->format('d/m/Y') }}</td>
                                        <td>{{$agendamento ->hora}}</td>
                                        <td>
                                        </tr>
    @endforeach
</body>

</html>