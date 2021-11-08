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
</head>
<body>

<header>
    <ul>
        @foreach($categorias as $categoria)

            <li><a href="{{route('pesquisaCategoria',['id'=>$categoria->id_categorias])}}">{{$categoria->nome}}</a></li>

            {{--        <li>Braçadeiras</li>--}}
            {{--        <li><a href="#">Meias</a></li>--}}
        @endforeach
    </ul>
</header>


<div class="pricing4 py-5 bg-light">
    <div class="container">
        <!-- Row  -->
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h3 class="mb-3">Extra ordinary Pricing for your Fitness</h3>
                <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt</h6>
            </div>
        </div>
        <!-- Row  -->
        <div class="row mt-4">
            <!-- Column -->
            <div class="col-md-4">
                <div class="card card-shadow border-0 mb-4">
                    <img class="card-img-top" src="https://static.netshoes.com.br/produtos/luva-de-boxe-premium-iron-arm/06/CEQ-0061-006/CEQ-0061-006_zoom1.jpg?ts=1566212555" alt="wrappixel kit">
                    <div class="p-3">
                        <h5 class="font-weight-medium mb-0">BODY BUILDING PROGRAM</h5>
                        <h6 class="subtitle font-13">WITH JOHNATHAN DOE</h6>
                        <ul class="list-inline font-14 mt-3">
                            <li class="py-1"><i class="icon-check text-success"></i> 6 Days a Week</li>
                            <li class="py-1"><i class="icon-check text-success"></i> Dedicated Trainer Allocated</li>
                            <li class="py-1"><i class="icon-check text-success"></i> Diet Plan Included</li>
                            <li class="py-1"><i class="icon-check text-success"></i> Morning and Evening Batches</li>
                        </ul>
                        <div class="d-flex mt-3 align-items-center">
                            <h2 class="price">$99<small>/m</small></h2>
                            <div class="ml-auto"><a class="btn btn-danger-gradiant rounded-pill text-white btn-md border-0" href="">Comprar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            @foreach($produtos as $produto)
                <div class="col-md-4">
                    <div class="card card-shadow border-0 mb-4">
                        <img class="card-img-top" src="https://static.netshoes.com.br/produtos/luva-de-boxe-premium-iron-arm/06/CEQ-0061-006/CEQ-0061-006_zoom1.jpg?ts=1566212555" alt="wrappixel kit">
                        <div class="p-3">
                            <h5 class="font-weight-medium mb-0">{{$produto->nome}}</h5>
                            <h6 class="subtitle font-13">WITH MICHELLE ANDERSON</h6>
                            <ul class="list-inline font-14 mt-3">
                                <li class="py-1"><i class="icon-check text-success"></i> 6 Days a Week</li>
                                <li class="py-1"><i class="icon-check text-success"></i> Dedicated Trainer Allocated</li>
                                <li class="py-1"><i class="icon-check text-success"></i> Diet Plan Included</li>
                                <li class="py-1"><i class="icon-check text-success"></i> Morning and Evening Batches</li>
                            </ul>
                            <div class="d-flex mt-3 align-items-center">
                                <h2 class="price">{{'R$ '.number_format($produto->price,2,'.',',')}}</h2>
                                <div class="ml-auto"><a class="btn btn-danger-gradiant rounded-pill text-white btn-md border-0" href="">Comprar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Column -->
            <div class="col-md-4">
                <div class="card card-shadow border-0 mb-4">
                    <img class="card-img-top" src="https://static.netshoes.com.br/produtos/luva-de-boxe-premium-iron-arm/06/CEQ-0061-006/CEQ-0061-006_zoom1.jpg?ts=1566212555" alt="wrappixel kit">
                    <div class="p-3">
                        <h5 class="font-weight-medium mb-0">KICK BOXING & KARATE</h5>
                        <h6 class="subtitle font-13">WITH MATHEW DOE</h6>
                        <ul class="list-inline font-14 mt-3">
                            <li class="py-1"><i class="icon-check text-success"></i> 6 Days a Week</li>
                            <li class="py-1"><i class="icon-check text-success"></i> Dedicated Trainer Allocated</li>
                            <li class="py-1"><i class="icon-check text-success"></i> Diet Plan Included</li>
                            <li class="py-1"><i class="icon-check text-success"></i> Morning and Evening Batches</li>
                        </ul>
                        <div class="d-flex mt-3 align-items-center">
                            <h2 class="price">$79<small>/m</small></h2>
                            <div class="ml-auto"><a class="btn btn-danger-gradiant rounded-pill text-white btn-md border-0" href="">Comprar</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/js/popper.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
