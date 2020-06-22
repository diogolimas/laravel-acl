<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>{{$titulo ?? 'Painel ACL - Curso de Laravel'}}</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!--Fonts-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!--CSS-->
    <link rel="stylesheet" href="{{url('assets/painel/css/acl-painel.css')}}">

	<!--Favicon-->
	<link rel="icon" type="image/png" href="{{url('assets/painel/imgs/favicon-acl.png')}}">
</head>
<body>
	<div class="menu container-fluid">
		<ul class="menu row">
			<li class="col-md-2 text-center">
				<a href="/home">
                    
					<img src="{{url('assets/painel/imgs/acl-branca.png')}}" alt="acl" class="logo-login">
				</a>
			</li>
			<li class="col-md-2 text-center">
				<a href="/painel/users">
                <img src="{{url('assets/painel/imgs/perfil-acl.png')}}" alt="acl" class="logo-login">
					<h1>Usuários</h1>
				</a>
			</li>
			<li class="col-md-2 text-center">
				<a href="/painel/posts">
                    <img src="{{url('assets/painel/imgs/noticias-acl.png')}}" alt="acl" class="logo-login">
					
					<h1>Notícias</h1>
				</a>
			</li>
			<li class="col-md-2 text-center">
				<a href="/painel/roles">
                    
                    <img src="{{url('assets/painel/imgs/funcao-acl.png')}}" alt="acl" class="logo-login">
					
					<h1>Funções</h1>
				</a>
			</li>
			<li class="col-md-2 text-center">
				<a href="/painel/permissions">
                    
                    <img src="{{url('assets/painel/imgs/permissao-acl.png')}}" alt="acl" class="logo-login">
					
					<h1>Permissões</h1>
				</a>
			</li>
			<li class="col-md-2 text-center">
				<form action="/logout" method="post">
				@csrf
					<button  type="submit" class="btn">
						<img src="{{url('assets/painel/imgs/sair-acl.png')}}" alt="acl" class="logo-login">	
						<h1>Sair</h1>
					</button>
				</form>
				
			</li>
		</ul>
	</div><!--Menu-->

	<div class="clear"></div>


	<div class="clear"></div>

	<!--Content Dinâmico-->

    @yield('content')

	<div class="clear"></div>

	<div class="footer actions">
		<div class="container text-center">
			<p class="footer">EspecializaTi - Todos os direitos reservados</p>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>