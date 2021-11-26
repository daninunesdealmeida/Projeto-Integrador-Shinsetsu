<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Loja Shinsetsu</title>
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

    </body>


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

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->

    <header class="header-area header-sticky" style="position: fixed">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Acadêmia<em> Shinsetsu</em></a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{route('site')}}" >Home</a></li>
                            <li class="scroll-to-section"><a href="{{route('loja')}}" class="active">Loja</a></li>
                            <li class="scroll-to-section"><a href="{{route('carrinhocompra')}}">Meu Carrinho</a></li>
                            <!-- <li class="scroll-to-section"><a href="{{route('insereCarrinho')}}">Meus Pedidos</a></li> -->
                            <div>
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
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
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="container" id="top">
        <img src="{{ asset('assets/images/loja.jpeg') }}">


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
                                <p class="font-weight-medium mb-0" >Quantidade</p>
                                <input type="number" min="1" name="quantidade" >
                                <div class="d-flex mt-3 align-items-center">
                                    <h2 class="price">{{'R$ '.number_format($produto->preco,2,'.',',')}}</h2>
                                    <div class="ml-auto">
                                        <button class="btn btn-danger-gradiant rounded-pill text-white btn-md border-0" type="submit" style=" border: solid 1px #000 !important;
                                    color: #000 !important;">Adicionar ao Carrinho </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @include('flash::message')
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

</body>

</html>