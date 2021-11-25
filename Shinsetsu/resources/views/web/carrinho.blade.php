<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrinho Shinsetsu</title>

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
                            <li class="scroll-to-section"><a href="{{route('loja')}}">Loja</a></li>
                            <li class="scroll-to-section"><a href="{{route('carrinhocompra')}}">Meu Carrinho</a></li>
                </div>

                </ul>
                </nav>
            </div>
        </div>
        </div>
    </header>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="container" id="top">
        <img src="{{ asset('assets/images/carrinho.jpg') }}">
             
    </div>

    <form action="{{route('finalizaCompra')}}" method="post">
        @csrf

        <div class="row">
            @foreach($carrinhos as $carrinho)
                <div class="col-md-3 academic-compras">
                    <div class="card ">
                        <div class="form-group">
                            <label for="">Produto</label>
                            <input type="text" class="form-control" id="produto_id" name="produto_id" value="{{$carrinho->produto_id}}">
                        </div>

                        {{-- <div class="form-group">
                            <input type="text" class="form-control" id="imagem" name="imagem" value="{{$carrinho->imagem}}">
                        </div> --}}
                     
                        <div class="form-group">
                            <label for="">Valor</label>
                            <input type="text" class="form-control" id="valor" value="{{$carrinho->preco}}" name="valor">
                        </div>

                        <div class="form-group">
                            <label for="">Quantidade</label>
                            <input type="text" class="form-control quantidade" id="quantidade" value="{{$carrinho->quantidade}}" name="quantidade">
                        </div>

                        <div class="form-group">
                            <label for="">Valor Total Produto</label>
                            <input type="text" class="form-control valorTotal" id="valorTotal" name="valorTotal" value=" {{$carrinho->preco * $carrinho->quantidade}}">
                        </div>

                        <div class="ml-auto">
                            <form action="{{route ('destroyCarrinho', ['id'=>$carrinho->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                            <button  class="btn-sm btn-danger" type="submit">Remover</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            @endforeach

                      {{-- <div class="col-md-3 form-group valor-total">
                            <label for="">Quantidade Itens</label>
                           <input type="text" class="form-control quantidadeItens" id="quantidadeItens" name="quantidadeItens" value="{{$carrinho->count()}}">  --}}

                            <label for="">Total a Pagar</label>
                            <input type="text" class="form-control valorTotal" id="valorTotalPagar" name="valorTotalPagar" value="$total = $colecaoContas->sum('value')">
                        </div>
                  
        </div>

        <input type="hidden" class="totalValorGeral" name="totalValorGeral">
        <input type="hidden" class="quantidadeGeral" name="quantidadeGeral">

        <hr>

        <div class="forma-pagamento">
                <h4>Forma de pagamento</h4>
        </div>

        <div class="row">
            <div class="col-md-3 academic-pagamentos">
                <div class="form-group">
                    <label for="cartao">Bandeira do Cartão</label>
                    <select name="cartao" class="custom-select" id="cartao">
                        <option value="Mastercard">Mastercard</option>
                        <option value="Visa">Visa</option>
                        <option value="Ello">Ello</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 academic-pagamentos">
                <div class="form-group">
                    <label for="nomecartao">Nome Cartão</label>
                    <input type="text" class="form-control" id="nomecartao" name="nomecartao" placeholder="Digite o nome do Cartão">
                </div>
            </div>

            <div class="col-md-3 academic-pagamentos">
                <div class="form-group">
                    <label for="num_cartao">Número do cartão</label>
                    <input type="text" name="num_cartao" class="form-control" id="num_cartao">
                </div>
            </div>

            <div class="col-md-3 academic-pagamentos">
                <div class="form-group">
                    <label for="dt_vencimento">Vencimento do cartão</label>
                    <input type="date" name="dt_vencimento" class="form-control" id="dt_vencimento">
                </div>
                
            </div>
        </div>
            <div class="finalizar-compra">
                 <button type="submit" class="btn btn-primary">Finalizar Compra
                 </button>
            </div>
    </form>
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

</div>
<script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>
<script>
    $(function () {
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
    .academic-compras{
        padding:30px;
        margin: 10px;
        text-align: center;
    }

    .academic-pagamentos, .forma-pagamento{
        padding:30px;
        margin: 10px;
    }

    .finalizar-compra{
        text-align:center; 
        margin-right: 32%;
    }
    
    input#quantidadeItens {
    margin-left: 0px !important;
    }

    .valor-total, input#quantidadeItens {
    /* text-align: center; */
    margin-left: 28%;
    }

    p.text-total-pagar{
    text-align: center;
    color: black;
    font-size: 18px;
    }

</style>

