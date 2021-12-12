<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Agendamentos</title>
    <style>
        *{
            margin:0;
            padding:0;
            font-family: "Open Sans", sans-serif;
        }
        body{
            padding: 30px;
        }
        h1{
            text-align: center;
            margin-bottom: 20px;
        }
        table{
            width:100%;
            border: 1px solid #555555;
            margin: 0;
            padding: 0;
        }
        th{
            text-transform: uppercase;
        }
        table,th,td{
            border: 1px solid #555555;
            border-collapse: collapse;
            text-align: left;
            padding: 10px;
        }
        tr:nth-child(2n+0){
            background: #eeeeee
        }

        p{
            color:#888888;
            margin-top: 20px;
            text-align: center;
        }
        
    </style>
</head>

<body>
        <h1>Relatório Agendamentos</h1>
<table class="table table-striped">
                 
                                <tr style="width:0*; font-family:Verdana; font-size:small; font-variant:small-caps;">
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Modalidade</th>
                                        <th>Dia</th>
                                        <th>Hora</th>
                                </tr>
                                @foreach($agendamentos as $agendamento)
                                <tr>
                                        <td>{{$agendamento ->id_agendamentos}}</td>
                                        <td>{{$agendamento ->nome}}</td>
                                        <td>{{$agendamento ->modalidade}}</td>
                                        <td>{{ Carbon\Carbon::parse($agendamento ->dia)->format('d/m/Y') }}</td>
                                        <td>{{$agendamento ->hora}}</td>
                                </tr>
    @endforeach
</body>

</html>