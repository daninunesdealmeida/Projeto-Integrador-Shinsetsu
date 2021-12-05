<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Shinsetsu Acadêmia de Artes Marciais</title>
    <!--

    TemplateMo 548 Training Studio

    https://templatemo.com/tm-548-training-studio

    -->
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
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a class="logo">Acadêmia<em> Shinsetsu</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#features">Sobre Nós</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Horários</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Agendamentos</a></li>
                            <li class="scroll-to-section"><a href="{{route('loja')}}">Loja</a></li>
                            <li class="main-button"><a href="{{route('login')}}">Entrar</a></li>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/1.mp4" type="video/mp4" />
        </video>


        <!-- ***** Main Banner Area End ***** -->

        <!-- ***** Features Item Start ***** -->
        <section class="section" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-heading">
                            <h2>Sobre <em>Nós</em></h2>
                            <img src="assets/images/line-dec.png" alt="waves">
                            <p> <b>“Shinsetsu é uma palavra do idioma japonês que quer dizer, ao mesmo tempo, gentileza, amabilidade e respeito”</b></p>
                            <p> </p>
                            <p>"Fique em forma, mais forte e mais confiante no nosso centro. GFTeam Shinsetsu possui treinadores especializados e qualificados em uma ampla variedade de artes marciais. Se você deseja aprender uma nova arte marcial ou desenvolver suas atuais habilidades, estamos confiantes de que encontrará uma aula adequada para seu estilo em nosso estúdio em Passo Fundo."</p>
                        </div>
                    </div>
                    <Table>

                        <th>
                            <div class="col-lg-6">
                                <ul class="features-items">
                                    <li class="feature-item">
                                        <div class="left-icon">
                                            <img src="assets/images/judo.png" alt="First One" width="200" align=”middle”>
                                        </div>
                                        <div class="right-content">
                                            <h4>Judô</h4>
                                            <p> Judô a partir de 5 anos - professora Júlia Berté</p>
                                            <a target="_blank" href="http://www.judors.com.br/" class="text-button">Descubra mais</a>
                                        </div>
                                    </li>

                                    <li class="feature-item">
                                        <div class="left-icon">
                                            <img src="assets/images/jiu.png" alt="second one" width="200" align=”middle”>
                                        </div>
                                        <div class="right-content">
                                            <h4>Jiu Jitsu</h4>
                                            <p>Jiu jitsu a partir de 15 anos - professor Estevão Nogara</p>
                                            <p> </p>
                                            <a target="_blank" href="https://cbjj.com.br/" class="text-button">Descubra mais</a>
                                        </div>
                                    </li>
                        </th>

                </div>
                </Table>
            </div>

        </section>
        <!-- ***** Features Item End ***** -->

        <section class="section" id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading dark-bg">
                            <h2>Horário <em>das aulas</em></h2>
                            <img src="{{ asset('assets/images/line-dec.png') }}" alt="">
                            <p>Para Marcar aulas individuais entre em contato.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="schedule-table filtering">
                            <div class="col-lg-12">
                                <div class="filters">
                                    <ul class="schedule-filter">
                                        <li class="active" data-tsfilter="monday">Segunda-Feira</li>
                                        <li data-tsfilter="tuesday">Terça-Feira</li>
                                        <li data-tsfilter="wednesday">Quarta-Feira</li>
                                        <li data-tsfilter="thursday">Quinta-Feria</li>
                                        <li data-tsfilter="friday">Sexta-Feira</li>
                                    </ul>
                                </div>
                            </div>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="day-time">Segunda-Feira</td>
                                        <td id = "cor" class="monday ts-item show" data-tsmeta="monday"> Jiu-Jitsu 07:00 - 08:00 </td>
                                        <td id = "cor" class="monday ts-item show" data-tsmeta="monday"> Judô Infantil 17:00 - 18:30 </td>
                                        <td id = "cor" class="monday ts-item show" data-tsmeta="monday"> Jiu Jitsu 19:30 - 21:00 </td>
                                        <td id = "cor" class="monday ts-item show" data-tsmeta="monday"> </td>
                                        <td id = "cor" class="monday ts-item show" data-tsmeta="monday"> Jiu-Jitsu 22:00 - 23:00 </td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">Terça-Feira</td>
                                        <td id = "cor" class="tuesday ts-item show" data-tsmeta="tuesday"> Jiu-Jitsu 07:00 - 08:00 </td>
                                        <td id = "cor" class="tuesday ts-item show" data-tsmeta="tuesday"> </td>
                                        <td id = "cor" class="tuesday ts-item show" data-tsmeta="tuesday"> Jiu Jitsu 19:30 - 21:00 </td>
                                        <td id = "cor" class="tuesday ts-item show" data-tsmeta="tuesday"> Judô 18:30 - 19-30 </td>
                                        <td id = "cor" class="tuesday ts-item show" data-tsmeta="tuesday"> Jiu Jitsu 19:30 - 21:00 </td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">Quarta-Feira</td>
                                        <td id = "cor" class="wednesday ts-item show" data-tsmeta="wednesday"> </td>
                                        <td id = "cor" class="wednesday ts-item show" data-tsmeta="wednesday"> Judô Infantil 17:00 - 18:30 </td>
                                        <td id = "cor" class="wednesday ts-item show" data-tsmeta="wednesday"> Jiu Jitsu 19:30 - 21:00 </td>
                                        <td id = "cor" class="wednesday ts-item show" data-tsmeta="wednesday"> </td>
                                        <td id = "cor" class="wednesday ts-item show" data-tsmeta="wednesday"> Jiu Jitsu 19:30 - 21:00 </td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">Quinta-Feira</td>
                                        <td id = "cor" class="thursday ts-item show" data-tsmeta="thursday"> Jiu-Jitsu 07:00 - 08:00 </td>
                                        <td id = "cor" class="thursday ts-item show" data-tsmeta="thursday"> Judô Infantil 17:00 - 18:30 </td>
                                        <td id = "cor" class="thursday ts-item show" data-tsmeta="thursday"> Jiu Jitsu 19:30 - 21:00 </td>
                                        <td id = "cor" class="thursday ts-item show" data-tsmeta="thursday"> Judô 18:30 - 19-30 </td>
                                        <td id = "cor" class="thursday ts-item show" data-tsmeta="thursday"> Jiu Jitsu 19:30 - 21:00 </td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">Sexta-Feira</td>
                                        <td id = "cor" class="friday ts-item show" data-tsmeta="friday"> Jiu-Jitsu 07:00 - 08:00 </td>
                                        <td id = "cor" class="friday ts-item show" data-tsmeta="friday"> Judô Infantil 17:00 - 18:30 </td>
                                        <td id = "cor" class="friday ts-item show" data-tsmeta="friday"> </td>
                                        <td id = "cor" class="friday ts-item show" data-tsmeta="friday"> Judô 18:30 - 19-30 </td>
                                        <td id = "cor" class="friday ts-item show" data-tsmeta="friday"> Jiu Jitsu 19:30 - 21:00 </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Contact Us Area Starts ***** -->
        <section class="section" id="contact-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div id="map">
                            <iframe src="https://maps.google.com/maps?q=R.%20Minas%20Gerais,%20500%20-%20Vila%20Schell,%20Passo%20Fundo%20-%20RS,%2099072-161&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="contact-form">
                            <form id="contact" action="{{route('agendamentos.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="nome" type="text" id="nome" placeholder="Seu Nome:" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu Email:" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                            <input list="modalidade" name="modalidade" id="modalidade:" placeholder="Modalidade:">
                                            <datalist id="modalidade">
                                                <option value="Jiu Jitsu">
                                                <option value="Judô">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="dia" type="date" id="dia" placeholder="Dia que deseja marcar a aula:">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="hora" type="time" min="08:00" max="22:00" id="horas" placeholder="Horário que deseja marcar a aula:">
                                            <datalist id="horas">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="agendarAula" class="main-button">Agende sua aula</button>
                                        </fieldset>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Contact Us Area Ends ***** -->

        <!-- ***** Footer Start ***** -->
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

        <!-- jQuery -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('assets/js/popper.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        <!-- Plugins -->
        <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
        <script src="{{ asset('assets/js/mixitup.js') }}"></script>
        <script src="{{ asset('assets/js/accordions.js') }}"></script>


        <style>
            .day-time, #cor{
                background-color: #ed563b;
                color: gold;
                padding: 10px;
                font-family: Arial, Helvetica, sans-serif
            }
        </style>

</body>

</html>

<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#horas').mask('00:00');
    });
</script>

<script>
    document.getElementById("agendarAula").addEventListener("click", exibeMensagem);

    function exibeMensagem() {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Treino Agendado com Sucesso',
        });
    }
</script>