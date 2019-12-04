<!DOCTYPE html>
<?php 
session_start();
include('rotas/conect.php');

$erro_dados = "";
$erro_dados = $_SESSION['erro_dados'];

if(isset($_SESSION['usuario'])){
	$usuario = $_SESSION['usuario'];
	$id = $_SESSION['id'];

}else{
	header("Location:cadastro_cli.php");
	exit();
}

?>
<html lang="pt-br">
<head>
	<title>..:Dados Pessoais:..</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/checkout.css">
	<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
</head>
<body>

	<div class="super_container">

		<!-- Header -->
		<header class="header">
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo"><a href="index.php">Sublime.</a></div>
								<nav class="main_nav">
									<ul>
										<li><?php echo "Olá $usuario"; ?></li>
										<li><a href="vitrine.php">Produtos</a></li>
										<li><a href="dados_pessoais.php">Meus dados</a></li>		
										<li><a href="carrinho.php">Carrinho</a></li>		
										<li><a href="rotas/sair.php">Sair</a></li>
									</ul>
								</nav>
								<div class="header_extra ml-auto">
									<div class="search">
										<div class="search_icon">
											<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 475.084 475.084" style="enable-background:new 0 0 475.084 475.084;"
											xml:space="preserve">
											<g>
												<path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
												c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
												C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
												c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
												c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
												c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
												c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
												M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
												c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
												c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
												"/>
											</g>
										</svg>
									</div>
								</div>
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
		<!-- Search Panel -->
		<div class="search_panel trans_300">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
							<form action="vitrine.php" method="POST">
								<input type="text" class="search_input" name="pesquisa" placeholder="O que você procura?">
								<button type="submit" name="btn">Buscar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Checkout -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<?php 

	$query = $mysqli->query("select * from login_cli where email_cli = '$usuario'");
	$login_cli=$query->fetch_assoc();

	$nome = $login_cli["nome_cli"];
	$sobNome = $login_cli["sobNome_cli"];
	$email = $login_cli["email_cli"];
	$senha = $login_cli["senha_cli"];
	

	$query = $mysqli->query("select * from dados_cli where id_cli = '$id'");
	$dados_cli=$query->fetch_assoc();

	$cep = $dados_cli["cep"];
	$estado = $dados_cli["estado"];
	$cidade = $dados_cli["ciade"];
	$bairro = $dados_cli["bairro"];
	$rua = $dados_cli["rua_avenida"];
	$numero = $dados_cli["numero"];
	$add = $dados_cli["adicionais"];
	$telefone = $dados_cli["telefone"];
	$n_card = $dados_cli["n_cartao"];
	$val_card = $dados_cli["validade_cartao"];
	$nome_card = $dados_cli["nome_cartao"];
	$cpf = $dados_cli["cpf"];	

	?>

	<div class="container">
		<div class="row">
			<h2>Mantenha-nos atualizados!!</h2>
		</div>
	</div>

	<div class="checkout">
		<div class="container">
			<div class="row">
				<!-- Billing Info -->
				<div class="col-lg-12">
					<div class="billing checkout_section">
						<div class="section_title">Confirme seu endereço</div>
						<div class="section_subtitle">Preste atenção</div>
						<div class="checkout_form_container">
							<form method="POST" action="rotas/atualizar_dados.php">
								<div class="row">
									<div class="col-xl-4">
										<!-- Name -->
										<label for="checkout_name">Nome</label>
										<input type="text" name="nome" class="form-control" value="<?php echo $nome ?>">
									</div>
									<div class="col-xl-4">
										<!-- Name -->
										<label for="checkout_name">Sobrenome</label>
										<input type="text" class="form-control" value="<?php echo $sobNome ?>" name="sobNome" >
									</div>
									<div class="col-xl-4">
										<!-- Name -->
										<label for="checkout_name">Senha</label>
										<input type="text" class="form-control" value="<?php echo $senha ?>" name="senha">
									</div>																		
								</div>
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="checkout_name">E-mail</label>
										<input type="email" class="form-control" value="<?php echo $email ?>" name="email">
									</div>
									<div class="col-xl-6">
										<!--<div class="button order_button"><a href="#">Gravar</a></div>-->
										<label for="checkout_name">Telefone</label>
										<input type="text" class="form-control" value="<?php echo $telefone ?>" name="telefone">							
									</div>
								</div>

								<div class="container">
									<div class="row">
										<h2>Dados para entrega...</h2>
									</div>
								</div>								

								<div class="row">
									<div class="col-xl-3">
										<label for="checkout_name">CEP</label>
										<input type="text" class="form-control" value="<?php echo $cep ?>" name="cep">
									</div>
									<div class="col-xl-3">
										<label for="checkout_name">Estado</label>
										<input type="text" class="form-control" value="<?php echo $estado ?>" name="estado">
									</div>
									<div class="col-xl-3">
										<label for="checkout_name">Cidade</label>
										<input type="text" class="form-control" value="<?php echo $cidade ?>" name="cidade">
									</div>
									<div class="col-xl-3">
										<label for="checkout_name">bairro</label>
										<input type="text" class="form-control" value="<?php echo $bairro ?>" name="bairro">
									</div>			
								</div>	
								<div class="row">
									<div class="col-xl-4">
										<label for="checkout_name">Rua / Avenida</label>
										<input type="text" class="form-control" value="<?php echo $rua ?>" name="rua">
									</div>
									<div class="col-xl-4">
										<label for="checkout_name">Numero</label>
										<input type="text" class="form-control" value="<?php echo $numero ?>" name="numero">
									</div>
									<div class="col-xl-4">
									</div>			
								</div>
								<div class="row">
									<div class="col-xl-8">
										<label for="checkout_name">Adicionais</label>
										<input type="text" name="add" class="form-control" value="<?php echo $add ?>">
									</div>
									<div class="col-xl-4">
									</div>
								</div>
								
								<div class="container">
									<div class="row">
										<h2>Dados para pagamento</h2>
									</div>
								</div>							

								<div class="row">
									<div class="col-xl-8">
										<label for="checkout_name">Número do cartão</label>
										<input type="text" class="form-control" value="<?php echo $n_card ?>" name="n_card">
									</div>
									<div class="col-xl-4">
									</div>
								</div>	
								<div class="row">
									<div class="col-xl-4">
										<label for="checkout_name">Validade do cartão</label>
										<input type="text" class="form-control" value="<?php echo $val_card ?>" name="val_card">
									</div>
									<div class="col-xl-4">
										<label for="checkout_name">Nome gravado no cartão</label>
										<input type="text" class="form-control" value="<?php echo $nome_card ?>" name="nome_card">
									</div>
									<div class="col-xl-4">
										<label for="checkout_name">CPF</label>
										<input type="text" class="form-control" value="<?php echo $cpf ?>" name="cpf">
									</div>			
								</div>
								<br>
								<br>

								<div class="row">
									<button class="btn btn-primary form-control" name="btn_atualiza_dados" type="submit">Gravar</button>
								</div>																
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/checkout.js"></script>
</body>
</html>