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
                <th style="border:grey solid 2px;">Data Venda</th>
                <th style="border:grey solid 2px;">Cliente</th>
                <th style="border:grey solid 2px;">Total Itens</th>
                <th style="border:grey solid 2px;">Valor Vendas</th>
                {{-- <th style="border:grey solid 2px;">Produtos</th> --}}
                </thead>
            </tr>
            @foreach($vendas as $venda)
            <tr>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$venda ->id_vendas}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{ Carbon\Carbon::parse($venda ->dt_venda)->format('d/m/Y') }} </td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{ucfirst($venda ->usuario->name)}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{$venda ->total_itens}}</td>
                <td style="border:rgb(68, 183, 243) solid 2px;">{{'R$ '.number_format($venda ->valor_vendas, 2, ',', '.')}}</td>
                
                <td>
            </tr>
            @endforeach
</body>

</html>