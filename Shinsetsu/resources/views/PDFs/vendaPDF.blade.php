<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Vendas</title>
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
    <h1>Relatório Vendas</h1>
    <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Data Venda</th>
                <th>Cliente</th>
                <th>Total Itens</th>
                <th>Valor Vendas</th>
               
            </tr>
            @foreach($vendas as $venda)
            <tr>
                <td>{{$venda ->id_vendas}}</td>
                <td>{{ Carbon\Carbon::parse($venda ->dt_venda)->format('d/m/Y') }} </td>
                <td>{{ucfirst($venda ->usuario->name)}}</td>
                <td>{{$venda ->total_itens}}</td>
                <td>{{'R$ '.number_format($venda ->valor_vendas, 2, ',', '.')}}</td>           
            </tr>
            @endforeach
</body>

</html>