<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Language" content="pt-br">
	<link rel="stylesheet" type="text/css" href="<?=url("assets/css/core-style.css")?>">
	<link rel="stylesheet" type="text/css" href="<?=url("assets/css/core-media.css")?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="<?=url("assets/js/core-login.script.js")?>"></script>
	<script src="https://kit.fontawesome.com/d90824391e.js" crossorigin="anonymous"></script>
	<title>Painel de Administração</title>
</head>
<body>
	<header>
		<h4>Painel de Administração, seja bem vindo!</h4>
		<nav>
			<ul>
				<!-- <li><a href="perfil.php"><i class="fas fa-id-card" azul></i></a></li> -->
				<!-- <li><a href="alterar_perfil.php"; ?><i class="fas fa-user-cog" cinza></i></a></li> -->
				<!-- <li><a href="sistema.php"><i class="fas fa-wrench" amarelo></i></a></li> -->
				<li><a href="/admin/logout"><i class="fas fa-power-off" vermelho></i></a></li>
			</ul>
		</nav>
	</header>
			<div class="responsive">
				<ul>
					<li><a href="/admin/home">Home</a></li>
					<!-- <li><a href="banners.php">Banners</a></li>
					<li><a href="usuarios.php">Usuários</a></li>
					<li><a href="clientes.php">Clientes</a></li>
					<li><a href="produtos.php">Produtos</a></li>
					<li><a href="pagamentos.php">Pagamentos</a></li> -->
				</ul>
				
			</div>
			<!-- <div class="responsive">
				<ul>
					<li><a href="pagamentos.php">Pagamentos</a></li>
					<li><a href="pagamentos.php">Pagamentos</a></li>
					<li><a href="pagamentos.php">Pagamentos</a></li>
					<li><a href="pagamentos.php">Pagamentos</a></li>
				</ul>
			</div> -->
		<div class="menu-lateral">
			<div class="img-autor">
				<img src="<?=url("/assets/images/autor.png")?>">
			</div>
			<nav>
				<ul>
					<li><a href="/admin/home">Home</a></li>
					<!-- <li><a href="slide.php">Slides</a></li> -->
					<!-- <li><a href="noticia.php">Notícias</a></li> -->
					<!-- <li><a href="banners.php">Banners</a></li>
					<li><a href="usuarios.php">Usuários</a></li>
					<li><a href="clientes.php">Clientes</a></li>
					<li><a href="produtos.php">Produtos</a></li>
					<li><a href="pagamentos.php">Pagamentos</a></li> -->
				</ul>
			</nav>
		</div>

        <content>
            <div class="avisos">
                <div class="titulo">
                    <h1>Bem vindo ao Painel de Administração</h1>
                </div>
                <div class="conteudo">
                    Este painel foi desenvolvido para fins de gestão.<br>
                    Ele permite a gestão de produtos e pedidos de sua loja online de forma simples e eficiente.<br>
                    <br><br>
                </div>
            </div>
        </content>

		<?php if(isset($_SESSION['message'])): ?>
            <div class="alert" id="alert">
                <span class="closebtn" onclick="closeAlert()">&times;</span> 
                <strong>Informativo! - <?=$_SESSION['message']?></strong>
            </div>
        <?php endif; ?>
</body>
</html>