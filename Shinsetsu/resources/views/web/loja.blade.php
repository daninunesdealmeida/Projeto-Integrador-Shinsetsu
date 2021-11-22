<!doctype html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/estilos.css') }}">
 

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-training-studio.css') }}">
</head>
<style>
     .body{	background-color: #545b62;
     }
     </style>

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">Acadêmia<em> Shinsetsu</em></a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#contact-us">Agendamentos</a></li>
                         <li class="scroll-to-section"><a href="{{route('carrinhocompra')}}">Meu Carrinho</a></li>
                        <li class="scroll-to-section"><a href="{{route('loja')}}">Loja</a></li>
                        <div>
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categorias
                            </a>
                    
                            <div class="dropdown-menu" aria-labelledby="Categorias">
                                @foreach($categorias as $categoria)
                                    <li><a class="dropdown-item" href="{{route('pesquisaCategoria',['id'=>$categoria->id_categorias])}}">{{$categoria->nome}}</a></li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                       
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

   

<div class="pricing4 py-5 bg-light">
    <div class="row">
        @foreach($produtos as $produto)
            <div class="col-md-4">
                <div class="card card-shadow border-0 mb-4">
                    <img class="card-img-top" src="img/produtos/{{$produto->imagem}}" alt="wrappixel kit">
                    <div class="p-3">
                        <h5 class="font-weight-medium mb-0">{{$produto->nome}}</h5>
                        <h5 class="font-weight-medium mb-0">Estoque {{$produto->qt_estoque}}</h5>
                        <form action="{{route('insereCarrinho')}}" method="post">
                            @csrf
                            <input type="hidden" name="idproduto" value="{{$produto->id_produtos}}">
                            <input type="hidden" name="preco_produto" value="{{$produto->preco}}">
                            <p class="font-weight-medium mb-0">Quantidade</p>
                            <input type="number" name="quantidade">
                            <div class="d-flex mt-3 align-items-center">
                                <h2 class="price">{{'R$ '.number_format($produto->preco,2,'.',',')}}</h2>
                                {{--                                <div class="ml-auto"><a class="btn btn-danger-gradiant rounded-pill text-white btn-md border-0" href="">Comprar</a></div>--}}
                                <div class="ml-auto">
                                    <button class="btn btn-danger-gradiant rounded-pill text-white btn-md border-0" type="submit">Adicionar ao Carrinho </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{--<div class="container">--}}
{{--    <h1>Carrinho de compras</h1>--}}


{{--    <form action="{{route('insereCarrinho')}}" method="post">--}}
{{--        @csrf--}}

{{--        @foreach($carrinhos as $carrinho)--}}
{{--            <ul>--}}
{{--                <li>{{$carrinho->produto_id}} - {{$carrinho->preco * $carrinho->quantidade}}</li>--}}
{{--            </ul>--}}
{{--        @endforeach--}}

{{--            <div class="ml-auto">--}}
{{--                <button class="btn btn-primary" type="submit">concluir compra</button>--}}
{{--            </div>--}}
{{--    </form>--}}

{{--</div>--}}


<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/js/popper.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
