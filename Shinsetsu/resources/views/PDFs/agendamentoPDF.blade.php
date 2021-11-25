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
                                
                                <tr style="width:0*; font-family:Verdana; font-size:small; font-variant:small-caps;">
                                        <th style="border:grey solid 2px;">Id</th>
                                        <th style="border:grey solid 2px;">Nome</th>
                                        <th style="border:grey solid 2px;">Modalidade</th>
                                        <th style="border:grey solid 2px;">Dia</th>
                                        <th style="border:grey solid 2px;">Hora</th>
                                </tr>
                                @foreach($agendamentos as $agendamento)
                                <tr>
                                        <td style="border:rgb(68, 183, 243) solid 2px;">{{$agendamento ->id_agendamentos}}</td>
                                        <td style="border:rgb(68, 183, 243) solid 2px;">{{$agendamento ->nome}}</td>
                                        <td style="border:rgb(68, 183, 243) solid 2px;">{{$agendamento ->modalidade}}</td>
                                        <td style="border:rgb(68, 183, 243) solid 2px;">{{ Carbon\Carbon::parse($agendamento ->dia)->format('d/m/Y') }}</td>
                                        <td style="border:rgb(68, 183, 243) solid 2px;">{{$agendamento ->hora}}</td>
                                </tr>
    @endforeach
</body>

</html>