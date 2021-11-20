<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Loja Shinsetsu</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/estilos.css') }}">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>

        <style>
		*, html{ font-family: Helvetica, arial, sans-serif; margin: 0 0; padding: 0 0; }
        body{ margin: 0 0; padding: 0 0; background-color:#D6D1CA; }
		h1{ color: #594A40; letter-spacing:-2px ;text-align:center;font-size:46px;font-family:Helvetica, arial,sans-serif;text-transform:uppercase;margin:30px 0 0;}
		div#container{ margin: 0 auto; width:960px; }

		p{ margin: 10px 10px; }
				ul#produtos{ list-style:none; }
        div#carrinho-top{
			background-color: #C92D21;
			width: 960px;
			color: #fff;
			border-bottom:1px dashed #fff;
			opacity: .8;
			position:relative;
	 	}
		div#carrinho-info{ padding: 10px; }
		div#carrinho-container{
			height:240px;
			position:absolute;
			width:240px;
			background-color:#fff;
			border:2px solid #c92d21;
			display:none;
		}
		div#carrinho-container ul{ overflow:auto; height:200px; margin: 10px; list-style:none; }
		div#carrinho-container ul li{ color:#333; font-size:12px; border-bottom:1px dotted #ccc; text-align:center; margin:10px; }

		ul#produtos li{
			float: left;
			background-color:#fff;
			-moz-box-shadow: 5px 5px 5px #ccc;
			  -webkit-box-shadow: 5px 5px 5px #ccc;
			  box-shadow: 5px 5px 5px #ccc;
			padding:10px;
			margin:15px;
			width:270px;
			text-align:center;
		}
		ul#produtos li h3{
			margin: 6px 0 6px 0;
			color: #594A40;
			background-color:#f2f2f2;
			padding:6px;
		}
		p.preco-por{
			color: #594A40;
			font-weight:900;
		}
		.ui-state-hover{
			height:160px;
			border:4px dashed #000;
		}
        </style>

    </head>
    <body>

        <div class="btn-group">
            <a href="{{ route('site') }}" class="btn btn-secondary"> Home</a>
            <a href="{{ route('loja') }}" class="btn btn-secondary"> Loja</a>
        
            <div class="dropdown show">
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

		<div id="container">

	        <div id="carrinho-top">
				<div id="carrinho-info">
					<p>Arraste produtos para esta área</p>
				</div>
				<div id="carrinho-container">
	            	<ul id="carrinho-produtos">
						<li class="adicione">Arraste produtos para esta área</li>
					</ul>
				</div>
	        </div>

				<h1>Loja Shinsetsu</h1>
                
            @foreach($produtos as $produto)
			<ul id="produtos">
				<li class="produto-dd"><input type="hidden" class="produto-id" /><h3>{{$produto->nome}}</h3><p><img class="card-img-top" src="img/produtos/{{$produto->imagem}}" alt="wrappixel kit" width="75" height="90" /></p><h5 class="font-weight-medium mb-0"></h5>
                    <h5 class="font-weight-medium mb-0"><p class="preco-por">Valor {{$produto->preco}}</h5></li>
                        
			</ul>
            @endforeach

			</div>

           
    <script type="text/javascript">
	var timerCarrinho = '';
    $(function(){

		$(window).scroll(function(){
            var wtop	 	= $(this).scrollTop();
			var carrinho 	= $('#carrinho-top');
			var container	= $('#container');
			var cheight 	= $(carrinho).height();
            if( wtop > ( cheight / 2 ) )
            {
				$(container).css('margin-top', cheight+'px');
                $(carrinho)
					.css({
	                    position: 'absolute'
	                })
					.animate({
						marginTop: ( wtop - cheight ) + 'px'
					}, 100);
            }
            else
            {
				$(container).css('margin-top', 0);
                $(carrinho)
					.stop(true, true)
					.css({
	                    position: 'relative',
						marginTop: 0
	                });
            }
        });

		$('#produtos li').draggable({
			helper: 'clone',
			start: function()
			{
				clearTimeout( timerCarrinho );
				$('#carrinho-container').show();
			}
		});

		$('#carrinho-produtos').droppable({
			hoverClass: 'ui-state-hover',
			accept: '.produto-dd',
			drop: function( event, ui )
			{
				$(this).find('.adicione').remove();
				var cod = ui.draggable.find('.produto-id').val();
				if( $(this).find('#clone-'+cod).length == 0 )
				{
					$('<li id="clone-'+cod+'" style="display:none;"></li>').html(ui.draggable.html()).prependTo( this );
					$(this).find('li:first').slideDown();
					var total_produtos = $(this).find('li').length;
					$('#carrinho-info').html('<p>' + total_produtos + ' produto' + ( total_produtos > 1 ? 's' : '' ) + '</p>' );
				}
			}
		});

		$('#carrinho-container').mouseenter(function(){
			clearTimeout( timerCarrinho );
		});

		$('#carrinho-container').mouseleave(function(){
			var carrinho = $(this);
			timerCarrinho = setTimeout( function(){
				$(carrinho).slideUp();
			}, 5000 );
		});


    });
    </script>

    </body>
</html>

