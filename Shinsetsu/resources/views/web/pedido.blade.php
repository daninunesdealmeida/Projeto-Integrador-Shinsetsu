<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos Shinsetsu</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--

 jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js')}}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-training-studio.css') }}">
</head>
<body>

<!-- ***** Header Area Start ***** -->

<header class="header-area header-sticky" style="position: fixed">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a class="logo">Acadêmia<em> Shinsetsu</em></a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{route('site')}}">Home</a></li>
                        <li class="scroll-to-section"><a href="{{route('loja')}}">Loja</a></li>
                        <li class="scroll-to-section"><a href="{{route('carrinhocompra')}}">Meu Carrinho</a></li>
                        <li class="scroll-to-section"><a href="{{route('meusPedidos')}}">Meus Pedidos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- ***** Main Banner Area Start ***** -->


<section class="my-5" style="padding-top: 100px">
    <div class="container">
        <div class="row">
            @forelse($vendas as $venda)
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{$venda->nome}}</label>
                        <p>{{$venda->quantidade}}</p>
                        <img class="card-img-top" src="/img/produtos/{{$venda->imagem}}" alt="wrappixel kit">
                        <p>Valor {{'R$ '. number_format($venda->preco,2,',','.')}}</p>
                    </div>
                </div>
            @empty
                <h1>Você não possui pedidos</h1>
            @endforelse
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Shinsetsu

                    - Designed by <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">TemplateMo</a></p>

                <!-- You shall support us a little via PayPal to info@templatemo.com -->

            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>
<script>
    $(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var total = 0
        var quantidade = 0
        $('.valorTotal').each(function (i, v) {
            total += parseFloat(v.value)
        })
        $('.quantidade').each(function (i, v) {
            quantidade += parseFloat(v.value)
        })
        $('.quantidadeGeral').val(quantidade)
        $('.totalValorGeral').val(total)


    })


</script>
</body>
</html>
<style>
    .academic-compras {
        padding: 30px;
        margin: 10px;
        text-align: center;
    }

    .academic-pagamentos, .forma-pagamento {
        padding: 30px;
        margin: 10px;
    }

    .finalizar-compra {
        text-align: center;
        margin-right: 32%;
    }

    input#quantidadeItens {
        margin-left: 0px !important;
    }

    .valor-total, input#quantidadeItens {
        /* text-align: center; */
        margin-left: 28%;
    }

    p.text-total-pagar {
        text-align: center;
        color: black;
        font-size: 18px;
    }

</style>

